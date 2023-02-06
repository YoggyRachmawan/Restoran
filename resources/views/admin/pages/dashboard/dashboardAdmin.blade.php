@extends('admin.adminRestoran')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-secondary"><i class="nav-icon far bi bi-people"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Total Kasir</span>
                                <span class="info-box-number">{{ $kasir }}</span>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-secondary"><i class="far bi bi-files"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Total Menu</span>
                                <span class="info-box-number">{{ $menu }}</span>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-secondary"><i class="far bi bi-arrow-left-right"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Total Transaksi</span>
                                <span class="info-box-number"></span>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-secondary"><i class="far bi bi-wallet2"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Total Pendapatan</span>
                                <span class="info-box-number">Rp </span>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                {{-- CHART --}}
                <div class="row">
                    <div class="col-6">
                        <!-- PIE CHART -->
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Makanan Terlaris</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <canvas id="pieChart"
                                    style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-6">
                        <!-- PIE CHART -->
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Minuman Terlaris</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <canvas id="pieChart"
                                    style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-12">
                        <!-- BAR CHART -->
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Pendapatan Perbulan</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart">
                                    <canvas id="barChart"
                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.main-content -->
    </div>
@endsection
