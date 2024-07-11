@extends('layouts.app')
@section('content')
    {{-- <style>
        .career .col-md-7 {
            padding-right: 5px;
        }
    </style> --}}
    <section class="career" id="career">
        <h4 class="text-center">Application<span></span></h4>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="bg-white p-4">
                        <div class="">
                            <img class="img-thumbnail" src="{{ asset('storage/applications/' . $application->image) }}"
                                style="width: 100%; height: 400px;" alt="">
                        </div>
                        <hr>
                        <div class="row">
                            <h5 class="text-uppercase">Open To</h5>
                            <div class="col-md-4 mb-3"><i
                                    class="fa-regular fa-circle-check me-2 fs-5 text-primary"></i>Local Company</div>
                            <div class="col-md-4 mb-3"><i
                                    class="fa-solid fa-map-location-dot me-2 fs-5 text-primary"></i>{{ $application->location }}
                            </div>
                            <div class="col-md-4 mb-3"><i
                                    class="fa-solid fa-dollar-sign me-2 fs-5 text-primary"></i>{{ $application->salary }}
                            </div>
                            <div class="col-md-4 mb-3"><i
                                    class="fa-solid fa-chair me-2 fs-5 text-primary"></i>{{ $application->position }}</div>
                            <div class="col-md-4 mb-3"><i
                                    class="fa-regular fa-clock me-2 fs-5 text-primary"></i>{{ $application->type }}</div>
                            <div class="col-md-4 mb-3"><i
                                    class="fa-solid fa-venus-mars me-2 fs-5 text-primary"></i>{{ $application->gender }}
                            </div>
                        </div>
                        <hr>
                        <div class="mt-3">
                            <h5 class="text-uppercase">application Descriptions</h5>
                            <div class="lh-lg">
                                {!! $application->description !!}
                            </div>
                        </div>
                        <div class="mt-3">
                            <h5 class="text-uppercase">application Requirements</h5>
                            <div class="lh-lg">{!! $application->requirement !!}</div>
                        </div>
                        <div class="mt-3 mb-3">
                            <h5 class="text-uppercase">Educations</h5>
                            <div class="lh-lg">
                                {!! $application->education !!}
                            </div>
                        </div>
                        <div class="row border border-gray p-3 mb-3">
                            <h5 class="text-uppercase mb-3">What We Can Offer</h5>
                            <div class="col-md-4 border-right">
                                <i class="fa-regular fa-thumbs-up me-3 fs-3 text-primary"></i><span
                                    class="fs-5">Benefits</span>
                                <p>{!! $application->benefit !!}</p>
                            </div>
                            <div class="col-md-4 border-right">
                                <i class="fa-regular fa-lightbulb me-3 fs-3 text-primary"></i><span
                                    class="fs-5">Highlights</span>
                                <p>{!! $application->highlight !!}</p>
                            </div>
                            <div class="col-md-4">
                                <i class="fa-regular fa-star me-3 fs-3 text-primary"></i><span
                                    class="fs-5">Opportunities</span>
                                <p>{!! $application->opportunity !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg-white p-4">
                        <h4 class=" text-uppercase">Apply For This Application</h4>
                        <form action="{{ route('applicant.create') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- @method('PUT') --}}
                            <div class="mb-2">
                                <label for="" class="mb-1">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Name" >
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" >
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Phone</label>
                                <input type="number" name="phone" class="form-control" placeholder="Phone" >
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Resume</label>
                                <input type="file" name="image" class="form-control">
                                <span class="text-danger">(PDF and Microsoft Word File.)</span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="mb-1">Where did you find us?</label>
                                <select name="choose" class="form-control">
                                    <option value="">--Choose--</option>
                                    <option value="JobNet">JobNet</option>
                                    <option value="LinkedIn">LinkedIn</option>
                                    <option value="Viber">Viber</option>
                                    <option value="Facebook">Facebook</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <button type="submit" class="btn btn-sm btn-primary">Apply</button>
                                <a href="" class="btn btn-sm btn-warning">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
