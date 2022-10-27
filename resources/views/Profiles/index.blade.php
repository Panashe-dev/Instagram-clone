@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 p-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
        </div>
        <div class="col-md-8 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class=" d-flex align-items-center pb-3">
                    <div class="h4">{{ $user->username }}</div>
                   <follow-button></follow-button>
                </div>
                @can('update',$user->profile)
                <a href="/p/create">Add New Post</a>
                @endcan
            </div>
            @can('update',$user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Porfile</a>
            @endcan
           
            <div class="d-flex ">
                <div class="pe-5"><strong >{{ $user->Posts->count() }}</strong> post</div>
                <div class="pe-5"><strong>23k</strong> followers</div>
                <div class="pe-5"><strong>212</strong> following</div>
            </div>

            <div class="pt-4 fw-bold">{{ $user->profile->title ?? 'add title' }}</div>
           <div >{{ $user->Profile->description ?? 'add description'}}</div>
        <div class=""><a href="#">{{ $user->Profile->url ?? 'N/A' }}</a></div>
        </div>
      
    </div>
    <div class="border">

    </div>
    <div class="d-flex justify-content-center">
        <button class="btn btn-defualt mr-4 fw-bolder font-monospace"><i class="fa-light fa-braille"></i> POSTS </button>
        <button class="btn btn-defualt fw-bold font-monospace">TAGGED</button>
    </div>
    <div class="row pt-4">
        @foreach ($user->posts as  $post)
            <div class="col-4 pb-4">
             <a href="/p/{{ $post->id }}">
                 <img src="/storage/{{ $post->image }}" class="w-100">
             </a>
            </div>
        @endforeach

    </div>
</div>
@endsection


