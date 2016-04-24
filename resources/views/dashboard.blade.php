@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
              <div class="panel-heading">Profile</div>
              <div class="panel-body">
                <img src="" class="img-circle" width="200" height="200">
                <h3>{{ Auth::user()->name }}</h3>
                <h5>{{ Auth::user()->email }}</h5>
                <hr>
                <h6>{{ Auth::user()->created_at }}</h6>
              </div>
            </div>
        </div>

        <div class="col-md-9">
          <div class="panel panel-default">
            <div class="panel-heading">User Activity</div>
            <div class="panel-body">
              <button class="btn btn-primary" id="create_blog" data-toogle="tooltip" title="create new article">Write Something Awesome</button>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
