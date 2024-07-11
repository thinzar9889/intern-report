<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Intern;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()) {
            $interns = Blog::with('intern');
            return DataTables::of($interns)->addIndexColumn()
                ->editColumn('intern_id', function ($data) {
                    return $data->intern ? $data->intern->name : '-';
                })
                ->filterColumn('intern_id', function ($query, $keyword) {
                    $query->whereHas('intern', function ($qry) use ($keyword) {
                        $qry->where('name', 'like', '%' . $keyword . '%');
                    });
                })
                ->addColumn('image', function ($data) {
                    $url= asset('storage/'.$data->image);
                    return '<img src="'.$url.'" border="0" width="40" class="img-rounded" align="center" />';})
                ->addColumn('action', 'backend.blogs.action')
                ->rawColumns(['action','image'])
                ->make(true);
        }
        return view('backend.blogs.index');
    }

    public function create()
    {
        $interns = Intern::all();
        return view('backend.blogs.create', compact('interns'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'intern_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'image' => 'required|mimes:png',
        ],
        [
        'intern_id.required' => 'The intern field is required.',
        'title.required' => 'The title field is required.',
        'description.required' => 'The description field is required.',
        'content.required' => 'The content field is required.',
        'image.required' => 'The image field is required.',
        ]);



        $save = new Blog();
        $save->intern_id = $request->intern_id;
        $save->title = $request->title;
        $save->description = $request->description;
        $save->content = $request->content;

        if (!empty($request->file('image'))) {
            $ext = $request->file('image')->getClientOriginalName();
            $file = $request->file('image');
            $randomStr = Str::random(20);
            $path = strtolower($randomStr) . '.' . $ext;
            $file->storeAs('public/', $path);
            $file->move(public_path('storage/blogs/'), $path);
            $save->image = $path;
        }

        $save->save();
        return redirect()->route('blogs.index')->with('success', 'Successfully Created!');

    }
    public function show($id)
    {
        $blog = Blog::find($id);

        return view('backend.blogs.show')->with('blog', $blog);
    }
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        // dd($blog);
        $interns = Intern::all();

        return view('backend.blogs.edit', compact('blog', 'interns'));
    }
    public function update(Request $request, $id)
    {
        $save = Blog::findOrFail($id);
        $save->intern_id = $request->intern_id;
        $save->title = $request->title;
        $save->description = $request->description;
        $save->content = $request->content;
        if ($request->hasFile('image')) {
            // Delete the old file if exists
            if (!empty($save->image)) {
                Storage::delete('public/' . $save->image);
                unlink(public_path('storage/blogs/' . $save->image));
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $randomStr = Str::random(20);
            $path = strtolower($randomStr) . '.' . $ext;
            $file->storeAs('public/', $path);
            $file->move(public_path('storage/blogs/'), $path);
            $save->image = $path;
        }

        $save->save();
        return redirect()->route('blogs.index')->with('success', 'Successfully Updated!');
    }

    public function destroy(Request $request)
    {
        $application = Blog::findOrFail($request->id)->delete();

        return response()->json($application);
    }


}
