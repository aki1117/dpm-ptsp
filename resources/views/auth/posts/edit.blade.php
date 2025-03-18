@extends('layouts.auth')

@section('title', 'Edit Post')

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid page-body-wrapper">
       
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Berita</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('posts.index')}}">Berita</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit berita</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              
             
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Update berita</h4>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('posts.update', $posts->id) }}" class="forms-sample" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputName1" placeholder="title" value="{{ $posts->title}} " required>
                      </div>
                      <div class="form-group">
                        <label>category</label>
                        <select name="category" class="form-control" required>
                            <option disabled selected>choose option</option>
                            @if (count($categories) > 0)
                                @foreach ($categories as $category)
                                  <option @selected( old('category') == $category->id ) value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Published</label>
                        <select name="is_publish" class="form-control" required>
                            <option disabled selected>choose option</option>
                            <option @selected( old('is_publish') == 1 ) value="1">publish</option>
                            <option @selected( old('is_publish') == 0 ) value="0">draft</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Description</label>
                        <textarea id="summernote" name="description" class="form-control" cols="30" rows="10" required>{{ $posts->description }}</textarea>
                      </div>
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="file" class="form-control" src=" {{ $posts->gallery_id}} "  required>
                        </div>
                      </div>
                      
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>      
              
            </div>
          </div>
          
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
  $(document).ready(function() {
    $('#summernote').summernote('code', '<text H>');
  });
</script>
@endsection