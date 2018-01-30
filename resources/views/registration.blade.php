@extends('layouts.master')
@section('title', 'Registration')
@section('content')
    <div class="row">
        <div class="container container-top">
            <form class="col-md-6">
                <div class="form-group">
                    <label for="full-name">Name:</label>
                    <input type="text" class="form-control" id="full-name">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="email" aria-labelledby="emailHelp" >
                    <small id="emailHelp" class="form-text">We'll never share your email with others.</small>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
@endsection