@extends('layouts.master')
@section('title', "Register")
@section('content')
<div class="container container-top">
    <div class="row">
        <div class="col-md-6">
            <form method="POST" action="/register">
                {{csrf_field()}}
                <h2>Register</h2>
                 <div class="form-group">
                     <label for="user-name">Name</label>
                     <input type="text" class="form-control" id="user-name" name="name">
                 </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-success">Register</button>
            </form>
        </div>
    </div>
</div>

@endsection