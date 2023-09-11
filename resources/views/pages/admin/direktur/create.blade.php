@extends('layouts.dashboard')
@section('title')
    Direktur || Data Direktur
@endsection
@section('pages')
    Add Direktur
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
                                <form action="{{ route('admins.store') }}" method="post" enctype="multipart/form-data">
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
