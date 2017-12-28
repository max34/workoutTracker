@extends('layouts.master)
@section('title', 'Login')
@section('content')
    <div class="container container-top">
        <div class="row">
            <div class="col-md-6">
                <h2>Log in</h2>
                <form method="POST" action="login">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Log in</button>
                </form>
            </div>
        </div>
    </div>
@endsection