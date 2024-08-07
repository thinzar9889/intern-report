@extends('backend.layouts.app')

@section('content')
    <div class="wrapper mt-3">
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Edit Blog</h5>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ route('blogs.index') }}"
                                        class="btn btn-sm btn-outline-primary float-right">Back</a>
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <label for="intern_id">Intern</label>
                                        <select name="intern_id" id="intern_id" class="form-control">
                                            <option value="">--select--</option>
                                            @foreach ($interns as $intern)
                                                <option {{ $intern->id == $blog->intern_id ? 'selected' : '' }}
                                                    value="{{ $intern->id }}">{{ $intern->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="col-md-6">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" name='title'
                                            value="{{ old('title', $blog->title) }}" placeholder="Enter Title">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="image">Image</label>
                                        <input type="file" name='image'>
                                    </div>
                                    @if (!empty($blog->image))
                                        <div class="mb-2">
                                            <a href="{{ asset('storage/' . $blog->image) }}" target="_blank"><img
                                                    src="{{ asset('storage/' . $blog->image) }}" style="width: 100px;"></a>
                                        </div>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="summernote1">Description</label>
                                    <textarea name="description" cols="30" rows="10" id="summernote1" class="form-control">{{ old('description', $blog->description) }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="summernote2">Content</label>
                                    <textarea name="content" cols="30" rows="10" id="summernote2" class="form-control">{{ old('content', $blog->content) }}</textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-sm btn-outline-primary">Submit</button>
                                <a href="{{ route('blogs.index') }}" class="btn btn-sm btn-warning">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#summernote1').summernote();
            $('#summernote2').summernote();
        });
    </script>
@endsection
