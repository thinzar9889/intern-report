<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Application;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $applications = Application::OrderBy('created_at','desc')->get();
        // dd($applications);
        return view('frontend.index',compact('applications'));
    }

    public function show($id)
    {
        $application = Application::find($id);

        return view('frontend.show', compact('application'));
    }

    public function apply($id, Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'resume' => 'required',

        ],
        [
        'name.required' => 'The name field is required.',
        'email.required' => 'The email field is required.',
        'phone.required' => 'The phone field is required.',
        'resume.required' => 'The resume field is required.',

        ]);

        $save = new Applicant();
        $save->application_id = $request->$id;
        $save->name = $request->name;
        $save->email = $request->email;
        $save->phone = $request->phone;

        if (!empty($request->file('resume'))) {
            $ext = $request->file('resume')->getClientOriginalName();
            $file = $request->file('resume');
            $randomStr = Str::random(20);
            $path = strtolower($randomStr) . '.' . $ext;
            $file->storeAs('public/', $path);
            $file->move(public_path('storage/applicants/'), $path);
            $save->resume = $path;
        }

        $save->save();
        return redirect()->back()->with('success','Application successfully uploaded');
    }
}
