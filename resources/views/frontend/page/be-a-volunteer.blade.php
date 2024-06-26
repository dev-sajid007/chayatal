
@extends('layouts.frontend.app')

@section('content')
<section class="welcome-section section-padding">
    <div class="container">
        <div class="welcome-title text-center">
            <div class="section-title"><h2>Be a Volunteer</h2></div>
            <div class="title"><p></p></div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" name="phone" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <textarea name="address" class="form-control" id="" cols="15" rows="5"></textarea>
                </div>
                <button class="btn btn-primary" style="background: #ec2e58;border:none"><i class="fa fa-save"></i> Submit</button>
            </div>
        </div>
    </div>
</section>
@endsection