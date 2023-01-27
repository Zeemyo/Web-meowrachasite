@extends('sb-admin/app')
@section('title', 'users')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">users</h1>

    <form action="/users/{{$users->id}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$users->name}}">
            <div class="col-md-6">
                                      

                                      @if ($errors->has('name'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('name') }}</strong>
                                          </span>
                                      @endif
                                  </div>
        </div>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email">email</label>
            <input type="text" class="form-control" id="email" email="email" value="{{$users->email}}">
            <div class="col-md-6">
                                      

                                      @if ($errors->has('email'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('email') }}</strong>
                                          </span>
                                      @endif
                                  </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password">password</label>
            <input type="text" class="form-control" id="password" password="password" value="{{$users->password}}">
            <div class="col-md-6">
                                      
                                      @if ($errors->has('password'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('password') }}</strong>
                                          </span>
                                      @endif
                                  </div>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Edit</button>
        <a href="/users" class="btn btn-secondary btn-sm">Kembali</a>
    </form>
@endsection