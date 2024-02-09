@extends('layouts.auth')
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection
@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/aduan" method="POST" id="editform">
                {{ method_field('PUT') }}
                <div class="modal-body">
                    <div class="modal-group">
                        <label> Name </label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Posts </h3>
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
                        <h4 class="card-title">Posts</h4>
                        <p class="card-description"> Add class <code>.table-striped</code>
                        </p>

                        <table id="posts-table" class="display nowrap" style="width:50%">
                            <thead>
                                <tr>
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
                                    <th> Action </th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($laporans as $laporan)
                                <tr>
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
                                    <td> {{ Str::limit($laporan->isian, '50', '...') }} </td>
                                    <td> {{ $laporan->tanggal_kejadian }} </td>
                                    <td> {{ $laporan->lokasi}} </td>
                                    <td>
                                        {{ $laporan->tujuan_pengaduan }}
                                    </td>


                                    <td>
                                        <!-- <a href="" class="btn btn-sm btn-success" id=".DisplayLapor"><i
                                                class="fas fa-eye"></i></a> -->
                                        <a href="#" class="btn btn-success edit">EDIT</a>
                                        <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
            var table = $('#posts-table').DataTable({"scrollX": true});
        

            table.on('click', '.edit', function() {
                $tr = $(this).closest('tr');
                if ($($tr).hasClass('child')) {
                    $tr = tr.prev('.parent');
                }

                var data = table.row($tr).data();
                console.log(data);

                $('#name').val(data[1]);

                $('#editForm').attr('action', '/auth/aduan/'+data[0])
                $('#editModal').modal('show');
            })
        });
    </script>
    <!-- <script>
        $('#posts-table').dataTable({
            "scrollX": true
        });
    </script> -->
   
    @endsection