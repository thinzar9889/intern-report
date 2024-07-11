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
                                    <h5>Add Application</h5>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ route('application.index') }}"
                                        class="btn btn-sm btn-outline-primary float-right">Back</a>
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('application.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                                        <div class="form-group">
                                            <label class="col-form-label text-right">Title<span class="text-danger">
                                                    *</span></label>
                                            <div class="">
                                                <input type="text" name="title"
                                                    class="form-control @error('title') is-invalid @enderror"
                                                    value="{{ old('title') }}" placeholder="eg. Solutions HUb Co.,Ltd">
                                                <div class=" text-danger invalid-feedback">{{ $errors->first('title') }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label text-right">Position<span class="text-danger">
                                                    *</span></label>
                                            <div class="">
                                                <input type="text" name="position"
                                                    class="form-control @error('position') is-invalid @enderror"
                                                    value="{{ old('position') }}" placeholder="eg.Web developer">
                                                <div class=" text-danger invalid-feedback">{{ $errors->first('position') }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label text-right">Department<span class="text-danger">
                                                    *</span></label>
                                            <div class="">
                                                <input type="text" name="department"
                                                    class="form-control @error('department') is-invalid @enderror"
                                                    value="{{ old('department') }}" placeholder="Enter Job Department">
                                                <div class=" text-danger invalid-feedback">
                                                    {{ $errors->first('department') }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label text-right">Comapny<span class="text-danger">
                                                    *</span></label>
                                            <div class="">
                                                <select name="company_id"
                                                    class="form-control  @error('company_id') is-invalid @enderror">
                                                    <option value="">--Choose--</option>
                                                    @foreach ($companies as $company)
                                                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                                                    @endforeach
                                                </select>
                                                <div class=" text-danger invalid-feedback">
                                                    {{ $errors->first('company_id') }}
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label text-right">Gender<span class="text-danger">
                                                *</span></label>
                                            <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror">
                                                <option value="">--select--</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                            <div class=" text-danger invalid-feedback">
                                                {{ $errors->first('gender') }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label text-right">Education<span class="text-danger">
                                                    *</span></label>
                                            <div class="">
                                                <input type="text" name="education"
                                                    class="form-control @error('education') is-invalid @enderror"
                                                    value="{{ old('education') }}" placeholder="Enter Job education">
                                                <div class=" text-danger invalid-feedback">
                                                    {{ $errors->first('education') }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label text-right">Location<span class="text-danger">
                                                    *</span></label>
                                            <div class="">
                                                <input type="text" name="location"
                                                    class="form-control @error('location') is-invalid @enderror"
                                                    value="{{ old('location') }}" placeholder="Enter Job location">
                                                <div class=" text-danger invalid-feedback">
                                                    {{ $errors->first('location') }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="salary">Stipend</label>
                                        <select name="salary" id="salary" class="form-control @error('salary') is-invalid
                                        @enderror">
                                            <option value="">--select--</option>
                                            <option value="Paid">Paid</option>
                                            <option value="Unpaid">Unpaid</option>
                                        </select>
                                        <div class=" text-danger invalid-feedback">
                                            {{ $errors->first('salary') }}
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="intern_no">No of Openings</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="number" class="form-control @error('intern_male') is-invalid

                                                @enderror" name='intern_male'
                                                    placeholder="male">
                                                    <div class=" text-danger invalid-feedback">
                                                        {{ $errors->first('intern_male') }}
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" class="form-control @error('intern_female') is-invalid

                                                @enderror" name='intern_female'
                                                    placeholder="female">
                                                    <div class=" text-danger invalid-feedback">
                                                        {{ $errors->first('intern_female') }}
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="period">Period</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="date" class="form-control @error('from_date') is-invalid

                                                @enderror" name='from_date'
                                                    placeholder="male">
                                                    <div class=" text-danger invalid-feedback">
                                                        {{ $errors->first('from_date') }}
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="date" class="form-control @error('to_date') is-invalid

                                                @enderror" name='to_date'
                                                    placeholder="female">
                                                    <div class=" text-danger invalid-feedback">
                                                        {{ $errors->first('to_date') }}
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label text-right">Email<span class="text-danger">
                                                    *</span></label>
                                            <div class="">
                                                <input type="text" name="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    value="{{ old('email') }}" placeholder="Enter Job email">
                                                <div class=" text-danger invalid-feedback">
                                                    {{ $errors->first('email') }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label text-right">Contract Phone<span class="text-danger">
                                                    *</span></label>
                                            <div class="">
                                                <input type="text" name="email"
                                                    class="form-control @error('phone') is-invalid @enderror"
                                                    value="{{ old('phone') }}" placeholder="Enter Job phone">
                                                <div class=" text-danger invalid-feedback">
                                                    {{ $errors->first('phone') }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="form-group">
                                            <label class="col-form-label text-right">Type<span class="text-danger">
                                                *</span></label>
                                            <select name="type" id="type" class="form-control @error('type') is-invalid @enderror">
                                                <option value="">--select--</option>
                                                <option value="fulltime">Fulltime</option>
                                                <option value="remote">Remote</option>
                                                <option value="parttime">Parttime</option>
                                            </select>
                                            <div class=" text-danger invalid-feedback">
                                                {{ $errors->first('type') }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 mt-2">
                                        <div class="form-group mb-3">
                                            <label class="col-form-label text-right">Image <span class="text-danger"> *</span> </label>
                                            <div class="">
                                                <input type="file" name="image" multiple
                                                    class="@error('image') is-invalid @enderror">
                                                <div class=" text-danger invalid-feedback">{{ $errors->first('image') }}
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="summernote1">Description</label>
                                    <textarea name="description" cols="30" rows="10" id="summernote1" class="form-control @error('description') is-invalid

                                    @enderror"></textarea>
                                    <div class=" text-danger invalid-feedback">{{ $errors->first('description') }}
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="summernote2">Requirements</label>
                                    <textarea name="requirement" cols="30" rows="10" id="summernote2" class="form-control @error('requirement') is-invalid

                                    @enderror"></textarea>
                                    <div class=" text-danger invalid-feedback">{{ $errors->first('requirement') }}
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <Benefit for="summernote3">Benefit</label>
                                        <textarea name="benefit" cols="30" rows="10" id="summernote3" class="form-control"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="summernote4">Highlight</label>
                                    <textarea name="highlight" cols="30" rows="10" id="summernote4" class="form-control"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="summernote5">Opportunity</label>
                                    <textarea name="opportunity" cols="30" rows="10" id="summernote5" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-sm btn-outline-success">Submit</button>
                                <a href="{{ route('application.index') }}" class="btn btn-sm btn-warning">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#summernote1').summernote();
            $('#summernote2').summernote();
            $('#summernote3').summernote();
            $('#summernote4').summernote();
            $('#summernote5').summernote();
        });
    </script>
@endsection
