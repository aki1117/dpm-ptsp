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
                <h5 class="modal-title" id="exampleModalLabel">User Details & Status Update</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <!-- User Details Table -->
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
                    </thead>
                    <tbody>
                        <tr></tr> <!-- This row will be replaced by JS -->
                    </tbody>
                </table>

                <!-- Status Update Form -->
                <form id="status-form" method="POST" data-base-action="{{ route('aduan.update', ['aduan' => '__ID__']) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="status-select" class="form-label fw-semibold">Status Aduan</label>
                        <select name="status" id="status-select" class="form-select">
                            <option value="received">📥 Diterima</option>
                            <option value="progress">🔄 Diproses</option>
                            <option value="done">✅ Selesai</option>
                        </select>
                    </div>
                </form>

            </div>

            <div class="modal-footer">
                <!-- Delete Form -->
                <form id="delete-form" method="POST" onsubmit="return confirm('Are you sure you want to delete this?');" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger me-2">Delete</button>
                </form>

                <!-- Submit Status Update -->
                <button type="submit" form="status-form" class="btn btn-success">
                    <i class="fas fa-save me-1"></i> Update Status
                </button>

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
                                    <th> Action </th>
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
                                    <td> 
                                        <button
                                            class="btn btn-info btn-sm view-btn"
                                            data-id="{{ $laporan->id }}"
                                            data-status="{{ $laporan->status ?? 'received' }}">
                                            View
                                        </button>
                                    </td>
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
         $(document).ready(function() {
            $('#posts-table').DataTable();

            // Handle "View" button click
            $(document).on('click', '.view-btn', function() {
                let $row = $(this).closest('tr');
                let laporanId = $(this).data('id');
                let currentStatus = $(this).data('status') || 'received';

                // Copy the row html into the modal table body
                let rowHtml = $row.html();
                $("#modaldata tbody tr").html(rowHtml);

                // Update the status form action and select value
                let form = $('#status-form');
                let actionUrl = form.data('base-action').replace('__ID__', laporanId);
                form.attr('action', actionUrl);
                $('#status-select').val(currentStatus);

                // Update delete form action
                $('#delete-form').attr('action', `/local/auth/aduan/${laporanId}`);

                $('#exampleModal').modal('show');
            });
        });
    </script>
    <!-- <script>
        $('#posts-table').dataTable({
            "scrollX": true
        });
    </script> -->

    @endsection