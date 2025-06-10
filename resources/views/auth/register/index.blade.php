@extends('layouts.auth')
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
@endsection
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('register') }}">Register</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List Admin</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        @if(count($users)>0 )
                        <h4 class="card-title">List Admin</h4>
                        <p class="card-description"> Add class <code>.table-striped</code>
                        </p>

                        <table id="posts-table" class="table table-striped">
                            <thead>
                                <tr>
                                    <th> Nama </th>
                                    <th> Email </th>
                                    <th> Action </th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($users as $user)
                                <tr>

                                    <td> {{ $user->name }} </td>

                                    <td> {{ $user->email }} </td>
                                    <td>
                                        <form action="{{ route('register.destroy', $user->id) }}" method="POST" class="btn btn-sm btn-danger">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="fa fa-trash" onclick=""></button>
                                        </form>
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
            $('#posts-table').DataTable();
        });
    </script>
    @endsection