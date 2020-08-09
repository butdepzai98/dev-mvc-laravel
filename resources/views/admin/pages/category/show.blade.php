@extends('admin.layout.master')

@section('header-content')
    <div class="page-header">
        <h3 class="page-title">
            Edit Post
            <span class="ml-2 h6 font-weight-normal">Do big things with Gleam.</span>
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Default form</h4>
                <p class="card-description">
                    Basic form layout
                </p>

                {{--Validate--}}
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-fill-danger" role="alert">
                        <i class="mdi mdi-alert-circle"></i>
                        {{ $error }}
                    </div>
                    @endforeach
                @endif
                {{-- End Validate--}}

                <form class="forms-sample" action="{{ route('post.update', $post->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputUsername1">Name Post</label>
                        <input type="text" class="form-control" name="txtName" placeholder="Name" value="{{ $post->name }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Detail</label>
                        <input type="text" class="form-control" name="txtDetail" placeholder="Detail" value="{{ $post->detail }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Author</label>
                        <input type="text" class="form-control" name="txtAuthor" placeholder="Author" value="{{ $post->author }}">
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <a class="btn btn-light" href="{{ url('post') }}">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection