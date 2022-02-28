@extends('layouts.backend')
@push('active-dashboard')
    active
@endpush
@section('content')
<div class="main-content">
    <section class="section mt-4">
        <div class="section-header">
            <button class="btn btn-primary"><span class="text-white fas fa-cogs"></span></button>
            &nbsp;&nbsp; <h1> Dashboard</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-poll"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Jenis Layanan</h4>
                            </div>
                            <div class="card-body">
                                10
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-poll"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Jenis Unsur</h4>
                            </div>
                            <div class="card-body">
                                10
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-question"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Grup Kuesioner</h4>
                            </div>
                            <div class="card-body">
                                10
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Responden</h4>
                            </div>
                            <div class="card-body">
                                10
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
