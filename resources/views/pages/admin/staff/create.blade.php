@extends('layouts.dashboard')
@push('style')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endpush
@section('title')
    Staff || DataStaff
@endsection
@section('pages')
    Add Staff
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">

                        <div class="card">

                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="npsn" class="form-label">NIDN</label>
                                        <input type="text" class="form-control" id="nidn" name="nidn">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="Password" name="password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="phone">
                                    </div>
                                    <div class="mb-3">
                                        <label for="photo" class="form-label">Profile</label>
                                        <input type="file" class="form-control" id="photo" name="photo">
                                    </div>

                                    <div class="form-group">
                                        <label>Departement</label>
                                        <select name="idDepartement" class="form-control select2bs4" style="width: 100%;">
                                            <option value="" selected="selected">--- Pilih Departement --- </option>
                                            <option value="idDepartment">Departement</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Bidang</label>
                                        <select name="idBidang" class="form-control select2bs4" style="width: 100%;">
                                            <option value="" selected="selected">--- Pilih Bidang --- </option>
                                            <option value="idStaff">Bidang</option>

                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="Address" class="form-label">Address</label>
                                        <textarea name="address" class="form-control" id="" cols="30" rows="3"></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('script')
    <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

        })
    </script>
@endpush
