@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{URL::asset('/svg/insta-pic.png')}}" alt="img" style="height:150px;">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between">
            <h1>
                {{ $user->username }}
            </h1>
            <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div style="padding-right:25px;"><strong>153 </strong>posts</div>
                <div style="padding-right:25px;"><strong>23k </strong>followers</div>
                <div style="padding-right:25px;"><strong>212 </strong>following</div>
            </div>
            <div class="pt-4" style="font-weight:bold;">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#" style="text-decoration:none;color:blue;">{{ $user->profile->url }}</a></div>
        </div>
    </div>

<div class="row" style="padding-top:30px;">
    <div class="col-4">
        <img src="{{URL::asset('/svg/post1.png')}}" style="width:300px;" alt="img">
    </div>
    <div class="col-4">
        <img src="{{URL::asset('/svg/post-2.png')}}" style="width:300px;" alt="img">
    </div>
    <div class="col-4">
        <img src="{{URL::asset('/svg/post-3.png')}}" style="width:300px;" alt="img">
    </div>
</div>


</div>


@endsection
