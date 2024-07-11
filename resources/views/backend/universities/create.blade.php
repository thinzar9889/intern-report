@extends('backend.layouts.app')
@section('content')
    <div class="wrapper">
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <!-- general form elements -->

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Create New University</h3>
                                    <a href="{{ route('universities.index') }}">
                                        <button type="button"
                                            class="btn btn-sm btn-outline-primary float-right">Back</button>
                                    </a>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{ route('universities.store') }}" method="POST">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="name">Name <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="name"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        id="name" placeholder="Enter Name" value="{{ old('name') }}">
                                                    @error('name')
                                                        <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="type">Type <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="type"
                                                        class="form-control @error('type') is-invalid @enderror"
                                                        id="type" placeholder="Enter Type" value="{{ old('type') }}">
                                                    @error('type')
                                                        <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="website">Website</label>
                                                    <input type="text" name="website" class="form-control" id="website"
                                                        placeholder="Enter Website" value="{{ old('website') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <textarea class="form-control" name="address" id="address" rows="2">{{ old('address') }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-sm btn-outline-success">Submit</button>
                                        <a href="{{ route('universities.index') }}"
                                            class="btn btn-sm btn-outline-warning">Cancel</a>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>

            {{-- Form Start Here --}}
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.select-role').select2({
                theme: 'bootstrap4'
            })
        });
    </script>
@endsection
