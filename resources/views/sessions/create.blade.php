@extends('layouts.master')
@section('content')
    <div class="col-md-8">
        <h1>Signin</h1>

        <form action="/login" method="POST" class="form">
            {{csrf_field()}}
            <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="password">Password: </label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Sign In</button>
            </div>
            <div class="form-group">
                @include('layouts.errors')
            </div>
        </form>
    </div>
@endsection