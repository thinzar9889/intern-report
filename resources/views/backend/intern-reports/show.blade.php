@extends('backend.layouts.app')
@section('content')
    <div class="wrapper mt-3">
        <div class="content-wrapper">
            <div class="container-fluid">
                <!-- Timelime example  -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Intern Report Details</h5>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ route('intern-reports.index') }}"
                                        class="btn btn-sm btn-outline-primary float-right">Back</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- The time line -->
                            <div class="timeline">
                                <!-- timeline time label -->
                                <div class="time-label">
                                    <span class="bg-red">Monday</span>
                                </div>
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <div>
                                    {{-- <i class="fas fa-envelope bg-indigo"></i> --}}
                                    <i class="fa fa-file-word bg-indigo"></i>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header">Description</h3>
                                        <div class="timeline-body">
                                            {{ $internReport->monday_report }}
                                        </div>
                                    </div>
                                </div>
                                <!-- END timeline item -->
                                <!-- timeline item -->
                                <div class="time-label">
                                    <span class="bg-green">Tuesday</span>
                                </div>
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <div>
                                    <i class="fa fa-file-word bg-pink"></i>
                                    <div class="timeline-item">

                                        <h3 class="timeline-header">Description</h3>
                                        <div class="timeline-body">
                                            {{ $internReport->monday_report }}
                                        </div>
                                    </div>
                                </div>
                                <!-- END timeline item -->
                                <!-- timeline item -->
                                <div class="time-label">
                                    <span class="bg-purple">Wednesday</span>
                                </div>
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <div>
                                    <i class="fa fa-file-word bg-green"></i>
                                    <div class="timeline-item">

                                        <h3 class="timeline-header">Description</h3>
                                        <div class="timeline-body">
                                            {{ $internReport->wednesday_report }}
                                        </div>
                                    </div>
                                </div>
                                <!-- timeline item -->
                                <div class="time-label">
                                    <span class="bg-pink">Thursday</span>
                                </div>
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <div>
                                    <i class="fa fa-file-word bg-purple"></i>
                                    <div class="timeline-item">

                                        <h3 class="timeline-header">Description</h3>
                                        <div class="timeline-body">
                                            {{ $internReport->thursday_report }}
                                        </div>
                                    </div>
                                </div>
                                <!-- END timeline item -->
                                <!-- timeline item -->
                                <div class="time-label">
                                    <span class="bg-indigo">Friday</span>
                                </div>
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <div>
                                    <i class="fa fa-file-word bg-red"></i>
                                    <div class="timeline-item">

                                        <h3 class="timeline-header">Description</h3>
                                        <div class="timeline-body">
                                            {{ $internReport->friday_report }}
                                        </div>
                                    </div>
                                </div>

                                <!-- END timeline item -->
                                <div>
                                    <i class="fas fa-clock bg-gray"></i>
                                </div>
                            </div>
                            <!-- END timeline item -->
                            <!-- timeline item -->

                            <nav class="w-100">
                                <div class="nav nav-tabs" id="product-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab"
                                        href="#product-desc" role="tab" aria-controls="product-desc"
                                        aria-selected="true">Reflection</a>
                                    <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab"
                                        href="#product-comments" role="tab" aria-controls="product-comments"
                                        aria-selected="false">Comments/Advice For Improvement</a>
                                    {{-- <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab"
                                        href="#product-rating" role="tab" aria-controls="product-rating"
                                        aria-selected="false">Rating</a> --}}
                                </div>
                            </nav>
                            <div class="tab-content p-3" id="nav-tabContent bg-info">
                                <div class="tab-pane fade active show" id="product-desc" role="tabpanel"
                                    aria-labelledby="product-desc-tab"> {{ $internReport->reflection }} </div>
                                <div class="tab-pane fade" id="product-comments" role="tabpanel"
                                    aria-labelledby="product-comments-tab"> {{ $internReport->supervisor_comment }}
                                </div>
                            </div>
                        </div>
                    </div><!-- /.card -->
                </div>
            </div>
        </div>
    </div>
@endsection
