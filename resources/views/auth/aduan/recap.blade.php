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
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Recap aduan</h4>
            <div class="table-responsive">
            
              <table class="table">
              
                <thead>
                  <tr>
                    <th> Jenis Aduan </th>
                    <th> Jumlah masukan </th>
                    <th> Masukan minggu ini </th>
                    <th> Lihat </th>
                  </tr>
                </thead>
                <tbody>
                @foreach($laporans as $laporan)     
                <tr>
                  <td>{{ $laporan->name }}</td>
                  <td>{{ $laporan->jenis_count }}</td>
                  <td>{{ $laporan->jenis_week_count }}</td>
                  <td><a class="btn btn-main" href="{{ route('aduan.stores', $laporan->id)}}">Read more</a></td>
                </tr>  
                @endforeach          
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      
    </div>
  </div>

  @endsection