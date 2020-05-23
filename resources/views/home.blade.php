@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="../../assets/img/cheers.jpg" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">BeersOClock.com</div>
            <div>Nous sommes une communauté de millions de buveurs de bières. Ce blog est open source pour tout ceux qui veulent apporter leur contribution (3) non profit ou pas !!!</div>
            <div> <a href="#">www.ddbieres.com</a> </div>
        </div>
    </div>
        <!--les posts-->
        <div class="row pt-5">
            <div class="col-4">
                <img src="assets/img/barbar.png" class="w-60" alt="bière barbar">
            </div>
            <div class="col-4">
                <img src="assets/img/bernardus.png" class="w-60" alt="bière bernardus">
            </div>
            <div class="col-4">
                <img src="assets/img/erdinger.png" class="w-60" alt="bière erdinger">
            </div>
        </div>
</div>  
@endsection
