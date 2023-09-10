@extends('layouts.dashboard')
@section('title')
    Admin || Data Admin
@endsection
@section('pages')
    Update Admin
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
