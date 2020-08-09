@extends('admin/layout/master')

@section('header-content')
    <div class="page-header">
        <h3 class="page-title">
        Post
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
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Post Table</h4>

        <div class="float-right">
            <button formaction="post/deleteall" type="submit" class="btn btn-gradient-danger"> Delete All Selected</button>&emsp;
            <a href="http://my-php-mvc.test/admin/category/create" class="btn btn-gradient-success"><span class="mdi mdi-library-plus text-white"></span> Thêm mới</a>
        </div>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input selectall">
                            <i class="input-helper"></i></label>
                    </div>
                </th>
                <th>STT</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Controll</th>
            </tr>
            </thead>
            <tbody>
            @if($categories)
                @foreach($categories as $key => $category)
                <tr>
                    <td scope="row">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" name="ids[]" value="{{ $category->id }}" class="form-check-input selectbox">
                                <i class="input-helper"></i></label>
                        </div>
                    </td>
                    <td>{{ $key++ }}</td>
                    <td>
                        {{ $category->name }}
                    </td>
                    <td>
                        {{ $category->slug }}
                    </td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            @endif
            </tbody>
        </table>

        </div>
    </div>
</div>
@endsection