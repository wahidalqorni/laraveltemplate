@extends('layouts.backend')
@push('active-master') active @endpush
@push('active-user') active @endpush

@section('content')
<div class="main-content">
    <section class="section mt-4">
        <div class="section-header">
            <button class="btn btn-primary"><span class="text-white fas fa-cogs"></span></button>
            &nbsp;&nbsp; <h1> Data Layanan</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <button class="btn btn-success" data-toggle="modal" data-target=".modal" data-form="tambah"><i
                            class="fas fa-plus"></i>
                        Tambah</button>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tabellayanan" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th width="10px;">No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th width="15%;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Fulan</td>
                                    <td>fulang@gmail.com</td>
                                    <td>
                                        <a href="" class="btn btn-success" title="Edit"><i class="fas fa-edit"></i></a>
                                        <a href="" class="btn btn-danger" title="Hapus"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection