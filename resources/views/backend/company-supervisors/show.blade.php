@extends('backend.layouts.app')
@section('content')
    <div class="wrapper mt-3">
        <div class="content-wrapper">
            {{-- <div class="content"> --}}
            <div class="container-fluid">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Company supervisor Details</h5>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ route('company-supervisors.index') }}"
                                        class="btn btn-sm btn-outline-primary float-right">Back</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-4">Name</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $companySupervisor->name }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Position</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $companySupervisor->position }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Email</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $companySupervisor->email ?? '---' }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Phone</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $companySupervisor->phone }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Company Name</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $companySupervisor->company->name }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Address</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $companySupervisor->address ?? '---' }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
