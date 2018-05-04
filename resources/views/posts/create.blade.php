@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">

        <h1>Publish a Post</h1>

        <hr>

        <form action="/posts" method="post">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>

            <div class="form-group">
                <label for="body">Body:</label>
                <textarea name="body" id="body" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>

            @include('layouts.errors')

        </form>

    </div>

@endsection