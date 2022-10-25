@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">

  <div class="col-8">
  <img src="/storage/{{ $post->image }}" alt="">
  </div>

   <div class="col-4">
    <div>
        <div class="d-flex align-items-center">
           <div style="padding-right:10px;">
              <img src="{{ $post->user->profile->profileImage() }}" alt="" class="rounded-circle w-100" style="max-width:100px;">
           </div>

           <div>
           <p class="font-weight-bold" style="font-size:20px;">
           <a href="/profile/{{ $post->user->id }}" style="text-decoration:none;" class="text-dark">
           {{ $post->user->username }}
           </a>
           <a href="" style="padding-left:12px;">Follow</a>
          </p>
           </div>
        </div>
    </div>

    <hr>
    <p>
    <span class="font-weight-bold" style="font-size:20px;">
    <a href="/profile/{{ $post->user->id }}" style="text-decoration:none;" class="text-dark">
    {{ $post->user->username }}</span>
    </a>
      {{ $post->caption }}
    </p>
   </div>
  </div>
</div>


@endsection
