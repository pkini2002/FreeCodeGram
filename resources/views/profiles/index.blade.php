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
            <a href="/p/create">Add New Post</a>
            </div>
            <div class="d-flex">
                <div style="padding-right:25px;"><strong>{{ $user->posts->count() }} </strong>posts</div>
                <div style="padding-right:25px;"><strong>23k </strong>followers</div>
                <div style="padding-right:25px;"><strong>212 </strong>following</div>
            </div>
            <div class="pt-4" style="font-weight:bold;">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#" style="text-decoration:none;color:blue;">{{ $user->profile->url }}</a></div>
        </div>
    </div>

<div class="row" style="padding-top:30px;">
   @foreach($user->posts as $post)
   <div class="col-4 pb-4">
    <a href="/p/{{ $post->id }}">
        <img src="/storage/{{ $post->image }}">
    </a>
    </div>
    @endforeach
</div>


</div>


@endsection
