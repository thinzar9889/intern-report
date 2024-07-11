@extends('backend.layouts.app')
@section('content')
<div class="wrapper">
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">Blog Page</div>
                        <div class="card-body">
                            <p class="card-text">Intern : {{ $blog->intern_id }}</p>
                            <p class="card-text">Title : {{ $blog->title }}</p>
                            <p class="card-text">Description : {{ $blog->description }}</p>
                            <p class="card-text">Content : {{ $blog->content }}</p>
                            <p class="file">Image : {{ $blog->image }}</p>
                        </div>
                        </hr>
                </div>
            </div>
    </div>
</div>
@endsection


