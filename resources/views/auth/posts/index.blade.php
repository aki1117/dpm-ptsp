@extends('layouts.auth')
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
@endsection
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Posts </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Posts</a></li>
                    <li class="breadcrumb-item active" aria-current="page">All Posts</li>
                </ol>
            </nav>
        </div>
        <div class="row">


            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        @if(count($posts)>0 )
                        <h4 class="card-title">Posts</h4>
                        <p class="card-description"> Add class <code>.table-striped</code>
                        </p>

                        <table id="posts-table" class="table table-striped">
                            <thead>
                                <tr>
                                    <th> Image </th>
                                    <th> Title </th>
                                    <th> Description </th>
                                    <th> Category </th>
                                    <th> Status </th>
                                    <th> Action </th>
                                </tr>
                            </thead>

                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td class="py-1">
                                        <img src=" {{ $post->gallery->image }}" style="width: 90px; height: 70px;" alt="image" />
                                    </td>
                                    <td> {{ $post->title }} </td>
                                    <td>
                                        {{ Str::limit($post->description, 15, '...') }}
                                    </td>
                                    <td> {{ $post->category->name }} </td>
                                    <td> {{ $post->is_publish == 1 ? 'Published' : 'Draft' }} </td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                                        <a href="" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
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