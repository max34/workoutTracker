@extends('layouts.master')
@section('title', "Dashboard")
@section('content')
    <div class="container container-top">
        <h2>Welcome {{auth()->user()->name}}</h2>
    </div>
@endsection