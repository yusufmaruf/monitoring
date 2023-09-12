@extends('layouts.dashboard')
@section('title')
    Setting || Data Setting
@endsection
@section('pages')
    Add Setting
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
                                <form action="{{ route('setting.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name Website</label>
                                        <input type="text" class="form-control" id="name" value=""
                                            name="name_website">
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name Instansi</label>
                                        <input type="text" class="form-control" id="name" value=""
                                            name="name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="name" value=""
                                            name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Logo</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile"
                                                    name="logo">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                        </div>
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
