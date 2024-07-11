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
                                    <h5>Application Details</h5>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ route('application.index') }}" class="btn btn-sm btn-outline-primary float-right">Back</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-4">Application Title</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $application->title }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Position</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $application->title }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Email</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $application->email }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Phone</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $application->phone }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Department</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $application->department }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Gender</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $application->gender }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Male</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $application->male }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Female</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $application->female }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Internship Period</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $application->from_date }}-{{ $application->to_date }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Company</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $company->name }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Education</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $application->education }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Salary</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $application->salary }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Internship Type</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $application->type }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Description</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $application->description }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Requirement</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $application->requirement }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Benefit</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $application->benefit }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Highlight</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $application->highlight }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Opportunity</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $application->opportunity }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Created Date</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $application->created_at }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Cover Image</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">
                                    <img src="{{ asset('storage/applications/'.$application->image) }}"
                                    style="width: 70px; cursor: pointer;" alt="Application Cover Image" height="50">

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


