@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scontent-del1-1.cdninstagram.com/v/t51.2885-19/s150x150/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=scontent-del1-1.cdninstagram.com&_nc_ohc=aBCmYoNjto4AX-6NMff&oh=2b024509113fb54fce3e3a99912c083d&oe=5F1F4167" class="rounded-circle" alt="LaravelGram">
        </div>
        <div class="col-9 pt-3">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add New Post</a>
            </div>
            <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>

            <div class="d-flex">
                <div class="pr-3"><strong>{{ $user->posts->count()}}</strong> posts</div>
                <div class="pr-3"><strong>51k</strong> followers</div>
                <div class="pr-3"><strong>261</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div class="pt-1">
                <p>{{ $user->profile->description }}</p>
            </div>
            <div>
                <a href="{{ $user->profile->url }}" target="_blank">{{ $user->profile->url ?? 'N/A'}}</a>
            </div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" alt="" class="w-100">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection