@extends('layouts.master')
@section('title', "Contact")
@section('content')
    <div class="row">
        <div class="container container-top">
            <div class="col-md-6">
                <h3>We want to hear from you</h3>
                <p>We are here to help you improve and reach your fitness goals. <br>
                <strong>Share your ideas on how we can improve.</strong></p>
            </div>
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <label for="contact-email">Email</label>
                        <input class="form-control" id="contact-email" type="text">
                    </div>
                    <div class="form-group">
                        <label for="contact-subject">Subject</label>
                        <input class="form-control" id="contact-subject" type="text">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection