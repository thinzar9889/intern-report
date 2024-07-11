@extends('layouts.app')

@section('content')

<section class="career" id="career">

    {{-- <h4 class="text-center">Career</h4> --}}
    <div class="container mt-3">
        <div class=""><h6>OPEN POSITIONS</h6></div>
        <div class="row d-flex">
            <div class="col-md-8">
                @forelse ($applications as $value)
                <div class="bg-white p-3 mb-5" data-aos="fade-up">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="img-thumbnail" src="{{ asset('storage/applications/'.$value->image) }}" style="width: 100%; height: 300px;" alt="">
                        </div>
                        <div class="col-md-8 ps-3 mt-3">
                            <h6><a target="_blank" href="" class=" text-danger text-decoration-none">{{ $value->position }}</a></h6>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <p><i class="fa-regular fa-clock  me-2"></i>{{ $value->type }}</p>
                                </div>
                                <div class="col-md-6">
                                    <p><i class="fa-regular fa-calendar-days me-2"></i>{{ $value->created_at }}</p>
                                </div>
                            </div>
                            <hr>
                            <h6>Jobs Description</h6>
                            <p>{!!  $value->description !!}</p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a target="_blank" href="{{ route('client.show',$value->id) }}" class="btn btn-sm btn-outline-primary">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                    <div class=""><h5>No Applications Found!</h5></div>
                @endforelse
            </div>
            <div class="col-md-4 ">
                <div class="bg-white p-4">
                    <div class=""><h6>RECENT JOBS</h6></div>
                    {{-- @foreach ($latestJobs as $latestJob) --}}
                        <div class="row">
                            <div class="col-md-6">
                                <h1>Solution Hub</h1>
                                {{-- <img class="img-thumbnail" src="{{ asset($latestJob->image) }}" style="width: 100%; height: 100%;" alt=""> --}}
                            </div>
                            <div class="col-md-6 p-2">
                                <h6>The Title is Something</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa facere placeat quis aspernatur in, eius itaque cumque! Id, architecto aliquid beatae impedit atque aspernatur pariatur reprehenderit sequi nisi at exercitationem.</p>
                                {{-- <h6>{{ $latestJob->position }}</h6>
                                <p>{{ date('d-m-Y', strtotime($latestJob->created_at)) }}</p> --}}
                            </div>
                        </div><hr>
                    {{-- @endforeach --}}
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
