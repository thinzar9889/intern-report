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
                                    <h3 class="card-title">Edit University Supervisor</h3>
                                    <a href="{{ route('university-supervisors.index') }}">
                                        <button type="button"
                                            class="btn btn-sm btn-outline-primary float-right">Back</button>
                                    </a>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{ route('university-supervisors.update', $universitySupervisor->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="name">Name <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="name"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        id="name" placeholder="Enter Name"
                                                        value="{{ old('name', $universitySupervisor->name) }}">
                                                    @error('name')
                                                        <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="email">Email <span
                                                            class="text-danger">*</span></label>
                                                    <input type="email" name="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        id="email" placeholder="Enter Email"
                                                        value="{{ old('email', $universitySupervisor->email) }}">
                                                    @error('email')
                                                        <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="password">Password</label>
                                                    <input type="password" name="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        id="password" placeholder="Enter Password">
                                                    @error('password')
                                                        <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="phone">Phone <span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" name="phone"
                                                        class="form-control @error('phone') is-invalid @enderror"
                                                        id="phone" placeholder="Enter Phone"
                                                        value="{{ old('phone', $universitySupervisor->phone) }}">
                                                    @error('phone')
                                                        <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="position">Position <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="position"
                                                        class="form-control @error('position') is-invalid @enderror"
                                                        id="position" placeholder="Enter Position"
                                                        value="{{ old('position', $universitySupervisor->position) }}">
                                                    @error('position')
                                                        <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="university_id">University <span
                                                            class="text-danger">*</span></label>
                                                    <select
                                                        class="form-control @error('university_id') is-invalid @enderror"
                                                        name="university_id" id="university_id">
                                                        <option value="">---</option>
                                                        @foreach ($universities as $university)
                                                            <option value="{{ $university->id }}"
                                                                {{ $universitySupervisor->university_id == $university->id ? 'selected' : '' }}>
                                                                {{ $university->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('university_id')
                                                        <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="address">Address</label>
                                                    <textarea class="form-control" name="address" id="address" rows="2">{{ old('address', $universitySupervisor->address) }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="accessable_interns">Accessable Interns <span
                                                            class="text-danger">*</span></label>
                                                    <select class="form-control @error('intern_id') is-invalid @enderror"
                                                        name="accessable_interns[]" id="accessable_interns" multiple>
                                                        <option value="">---</option>
                                                        @foreach ($interns as $intern)
                                                            <option value="{{ $intern->id }}"
                                                                {{ $universitySupervisor->accessable_interns == $intern->id ? 'selected' : '' }}>
                                                                {{ $intern->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('accessable_interns')
                                                        <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-sm btn-success">Submit</button>
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

            $(document).ready(function() {
                $('#accessable_interns').select2();
            });

        });
    </script>
@endsection