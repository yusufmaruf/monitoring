@extends('layouts.dashboard')
@push('style')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endpush
@section('title')
    Kepala Bidang || Kepala Bidang
@endsection
@section('pages')
    Update Kepala Bidang
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
                                <form method="POST" enctype="multipart/form-data" action="">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" value=""
                                            name="name" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="npsn" class="form-label">NIDN</label>
                                        <input type="text" class="form-control" id="nidn" value=""
                                            name="nidn" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="email" value=""
                                            name="email" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="passwordAdmin">Password Baru</label>
                                        <small class="form-text text-muted">*Jika Ingin Mengganti Password</small>
                                        <input type="password" name="password" class="form-control" id="passwordAdmin"
                                            placeholder="Masukkan Password Baru" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="phone" value=""
                                            name="phone" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="profile" class="form-label">Profile</label>
                                        <input type="file" name="photo" id="photo" class="form-control" readonly>
                                        {{-- @if  --}}
                                        <img src="" width="280px" height="175px" alt="profile logo">
                                        {{-- @else
                                            <p>Profile Tidak Ditemukan</p>
                                        @endif --}}
                                    </div>
                                    <div class="form-group">
                                        <label>Departement</label>
                                        <select name="idDepartement" class="form-control select2bs4" style="width: 100%;"
                                            disabled>
                                            <option value="" selected="selected">--- Pilih Departement --- </option>
                                            <option value="idDepartment">Departement</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Bidang</label>
                                        <select name="idDepartement" class="form-control select2bs4" style="width: 100%;"
                                            disabled>
                                            <option value="" selected="selected">--- Pilih Bidang --- </option>
                                            <option value="idDepartment">Bidang</option>

                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Address" class="form-label">Address</label>
                                        <textarea name="address" class="form-control" id="" cols="30" rows="3" readonly></textarea>
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
