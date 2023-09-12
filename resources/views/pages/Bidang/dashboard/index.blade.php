@extends('layouts.dashboard')
@section('title')
    Admin || Dashboard
@endsection
@section('pages')
    Dashboard
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3></h3>

                            <p>Jumlah Staff</p>

                        </div>
                        <div class="icon">
                            <i class="fas fa-user"></i>
                        </div>

                        <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3></h3>

                            <p>Jumlah Tugas Belum Selesai</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-ninja"></i>
                        </div>
                        <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3></h3>

                            <p>Jumlah Tugas Selesai</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-lg-12">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">Jumlah Tugas Selesai dan Belum Selesai</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
