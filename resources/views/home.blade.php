@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="svg/insta-pic.png" alt="" style="height:150px;">
        </div>
        <div class="col-9 pt-5">
            <div><h1>freecodecamp</h1></div>
            <div class="d-flex">
                <div style="padding-right:25px;"><strong>153 </strong>posts</div>
                <div style="padding-right:25px;"><strong>23k </strong>followers</div>
                <div style="padding-right:25px;"><strong>212 </strong>following</div>
            </div>
            <div class="pt-4" style="font-weight:bold;">freeCodeCamp.org</div>
            <div>We're a global community of millions of people learning to code together.
LearnToCodeRPG: https://www.freecodecamp.org/news/learn-to-code-rpg/</div>
            <div><a href="https://www.freecodecamp.org/" style="text-decoration:none;color:blue;">www.freecodecamp.org</a></div>
        </div>
    </div>

<div class="row" style="padding-top:30px;">
    <div class="col-4">
        <img src="svg/post1.png" style="width:300px;" alt="">
    </div>
    <div class="col-4">
        <img src="svg/post-2.png" style="width:300px;" alt="">
    </div>
    <div class="col-4">
        <img src="svg/post-3.png" style="width:300px;" alt="">
    </div>
</div>


</div>


@endsection
