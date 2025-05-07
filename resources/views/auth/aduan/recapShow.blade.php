@extends('layouts.auth')
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

@endsection
@section('content')

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">User Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table id="modaldata" class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th> </th>
                            <th> Nama </th>
                            <th> Jenis Kelamin </th>
                            <th> Alamat rumah </th>
                            <th> Pekerjaan </th>
                            <th> Alamat kantor </th>
                            <th> Email </th>
                            <th> No KTP </th>
                            <th> No Telp </th>
                            <th> Jenis Aduan </th>
                            <th> judul Laporan </th>
                            <th> Isi Laporan </th>
                            <th> Tanggal </th>
                            <th> Lokasi </th>
                            <th> Tujuan pengaduan </th>
                        </tr>
                    <tbody>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Laporan Data Aduan </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Aduan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Semua Aduan</li>
                </ol>
            </nav>
        </div>
        <div class="row">


            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        @if(count($laporans)>0 )
                        <a href="{{ route('laporans.excel', ['jenis' => $jenis->id]) }}" class="btn btn-success">Export to Excel</a>
                        <a href="{{ route('laporans.pdf', ['jenis' => $jenis->id]) }}" class="btn btn-danger">Export to PDF</a>
                        
                        <p class="card-description"> Add class <code>.table-striped</code>
                        </p>

                        <table id="posts-table" class="display nowrap" style="width:50%">
                            <thead>
                                <tr>
                                    <!-- <th> Action </th> -->
                                    <th> Nama </th>
                                    <th> Jenis Kelamin </th>
                                    <th> Alamat rumah </th>
                                    <th> Pekerjaan </th>
                                    <th> Alamat kantor </th>
                                    <th> Email </th>
                                    <th> No KTP </th>
                                    <th> No Telp </th>
                                    <th> Jenis Aduan </th>
                                    <th> judul Laporan </th>
                                    <th> Isi Laporan </th>
                                    <th> Tanggal </th>
                                    <th> Lokasi </th>
                                    <th> Tujuan pengaduan </th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach($laporans as $laporan)
                                <tr>
                                    <!-- <td><button class="btn btn-info">View</button></td> -->
                                    <td> {{ $laporan->name }} </td>
                                    <td> {{ $laporan->jenisKelamin == 1 ? 'Perempuan' : 'Laki-laki' }} </td>
                                    <td>
                                        {{ $laporan->rumah }}
                                    </td>
                                    <td> {{ $laporan->pekerjaan }} </td>
                                    <td> {{ $laporan->kantor }} </td>
                                    <td> {{ $laporan->email }} </td>
                                    <td> {{ $laporan->ktp }} </td>
                                    <td>
                                        {{ $laporan->phone_number }}
                                    </td>
                                    <td> {{ $laporan->jenis->name }} </td>
                                    <td> {{ $laporan->subjek }} </td>
                                    <td> {{ $laporan->isian }} </td>
                                    <td> {{ $laporan->tanggal_kejadian }} </td>
                                    <td> {{ $laporan->lokasi}} </td>
                                    <td>
                                        {{ $laporan->tujuan_pengaduan }}
                                    </td>

                                </tr>

                                @endforeach
                            </tbody>

                        </table>
                        @else
                        <h3 class="text-center text-danger">No posts found</h3>
                        @endif

                    </div>
                </div>
            </div>

        </div>
    </div>
    @endsection

    @section('scripts')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#posts-table').DataTable({
                "scrollX": true
            });

        });
    </script>
    <script>
        jQuery(document).ready(function($) {
            //jQuery Functionality
            $('#posts-table').DataTable();
            $(document).on('click', '#posts-table tbody tr button', function() {
                $("#modaldata tbody tr").html("");
                $("#modaldata tbody tr").html($(this).closest("tr").html());
                $("#exampleModal").modal("show");
            });
        });
    </script>
    <!-- <script>
        $('#posts-table').dataTable({
            "scrollX": true
        });
    </script> -->

    @endsection