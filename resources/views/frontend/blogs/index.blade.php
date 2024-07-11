@extends('layouts.app')

@section('content')

@foreach($blogs as $blog)
<div class="card">
    <div class="card-header">
        <div class="card-body">
            <h1>{{ $blog->title }}</h1>
        </div>
    </div>
</div>
@endforeach
@endsection
