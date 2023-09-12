@extends('layouts.dashboard')
@push('style')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('plugins/summernote/summernote-bs4.min.css') }}">
@endpush
@section('title')
    Task || Data Task
@endsection
@section('pages')
    Add Task
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
                                            <option value="idDepartment">Bidang</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Staff</label>
                                        <select name="idBidang" class="form-control select2bs4" style="width: 100%;">
                                            <option value="" selected="selected">--- Pilih Staff --- </option>
                                            <option value="idDepartment">Staff</option>

                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Desc</label>
                                        <textarea id="summernote" name="desc" class="form-control"></textarea>
                                    </div>


                                    <div class="mb-3">
                                        <label for="name" class="form-label">Deadline</label>
                                        <input type="date" class="form-control" id="name" name="name">
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
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>

    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()
            $('#summernote').summernote()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

        })
    </script>
@endpush
