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
                                        <select name="idBidang" class="form-control select2bs4" style="width: 100%;"
                                            disabled>
                                            <option value="" selected="selected">--- Pilih Bidang --- </option>
                                            <option value="idDepartment">Bidang</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Staff</label>
                                        <select name="idBidang" class="form-control select2bs4" style="width: 100%;"
                                            disabled>
                                            <option value="" selected="selected">--- Pilih Staff --- </option>
                                            <option value="idDepartment">Staff</option>

                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" disabled>
                                    </div>

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Desc</label>
                                        <textarea id="summernote" name="desc" class="form-control" disabled></textarea>
                                    </div>


                                    <div class="mb-3">
                                        <label for="name" class="form-label">Deadline</label>
                                        <input type="date" class="form-control" id="name" name="name" disabled>
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
