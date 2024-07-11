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
                                    <h5>University Details</h5>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ route('universities.index') }}"
                                        class="btn btn-sm btn-outline-primary float-right">Back</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-4">Name</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $university->name }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Type</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $university->type }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Website</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $university->website }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Address</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $university->address }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
