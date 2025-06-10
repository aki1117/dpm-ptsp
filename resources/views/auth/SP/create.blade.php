@extends('layouts.auth')

@section('title', 'Create Post')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')


  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Standar Prosedur</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('SP.index')}}">Standar Prosedur</a></li>
            <li class="breadcrumb-item active" aria-current="page">Upload Standar Prosedur</li>
          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Create Post</h4>
              @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif
              <form method="post" action="{{ route('SP.store') }}" class="forms-sample" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label>File upload</label>
                  <input type="file" name="path" class="form-control" required>
                </div>
            </div>

            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
            </form>
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