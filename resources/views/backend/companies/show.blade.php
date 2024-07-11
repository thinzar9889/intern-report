@extends('backend.layouts.app')
@section('content')
    <div class="wrapper mt-3">
        <div class="content-wrapper">
            {{-- <section class="content"> --}}
                <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Company Details</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ route('companies.index') }}"
                                            class="btn btn-sm btn-outline-primary float-right">Back</a>
                                    </div>
                                </div>
                            </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-md-4">Name</div>
                                        <div class="col-md-1">:</div>
                                        <div class="col-md-7">{{ $company->name }}</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4">Type</div>
                                        <div class="col-md-1">:</div>
                                        <div class="col-md-7">{{ $company->type }}</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4">Website</div>
                                        <div class="col-md-1">:</div>
                                        <div class="col-md-7">{{ $company->website }}</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4">Address</div>
                                        <div class="col-md-1">:</div>
                                        <div class="col-md-7">{{ $company->address }}</div>
                                    </div>
                                </div>
                                </hr>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection
