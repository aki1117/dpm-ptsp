@extends('layouts.auth')
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
@endsection
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Standar Prosedur </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('SP.create')}}">Buat</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Standar Prosedur</li>
                </ol>
            </nav>
        </div>
        <div class="row">


            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        @if(count($posts)>0 )
                        <h4 class="card-title">Standar Prosedur</h4>
                        <p class="card-description"> Add class <code>.table-striped</code>
                        </p>

                        <table id="posts-table" class="table table-striped">
                            <thead>
                                <tr>
                                    <th> No. </th>
                                    <th> File </th>
                                    <th> date </th>
                                    <th> Action </th>
                                </tr>
                            </thead>

                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td> {{ $post->id }} </td>
                                    <td> {{ $post->path }} </td>
                                    <td> {{ $post->created_at }} </td>
                                    <td>
                                        <a href="{{route('sp.download', $post->id)}}" class="btn btn-sm btn-success">Download</a>
                                        <a href="" class="btn btn-sm btn-danger"><i class ="fa fa-trash"></i></a>
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
        $(document).ready(function(){
            $('#posts-table').DataTable();
        });
    </script>
    @endsection