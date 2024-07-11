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
                                    <h5>University supervisor Details</h5>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ route('university-supervisors.index') }}"
                                        class="btn btn-sm btn-outline-primary float-right">Back</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-4">Name</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $universitySupervisor->name }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Email</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $universitySupervisor->email }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Phone</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $universitySupervisor->phone }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Position</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $universitySupervisor->position }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">University Name</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $universitySupervisor->university->name }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Address</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $universitySupervisor->address }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Accessable Interns</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">
                                    @if (is_array($universitySupervisor->accessable_interns))
                                        @foreach ($universitySupervisor->accessable_interns as $intern)
                                            {{ htmlspecialchars($intern) }}<br>
                                        @endforeach
                                    @else
                                        {{ htmlspecialchars($universitySupervisor->accessable_interns) }}
                                    @endif
                                </div>

                                {{-- <div class="col-md-7">{{ $universitySupervisor->accessable_interns}}</div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
