@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scontent-del1-1.cdninstagram.com/v/t51.2885-19/s150x150/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=scontent-del1-1.cdninstagram.com&_nc_ohc=aBCmYoNjto4AX-6NMff&oh=2b024509113fb54fce3e3a99912c083d&oe=5F1F4167"
             class="rounded-circle" alt="LaravelGram">
        </div>
        <div class="col-9 pt-3">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add New Post</a>
            </div>
            
            <div class="d-flex">
                <div class="pr-3"><strong>51k</strong> followers</div>
                <div class="pr-3"><strong>261</strong> following</div>
                <div class="pr-3"><strong>304</strong> posts</div>
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
        <div class="col-4">
            <img src="https://scontent-del1-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c0.107.924.924a/s640x640/101418871_149220720095600_2797518877581952974_n.jpg?_nc_ht=scontent-del1-1.cdninstagram.com&_nc_cat=108&_nc_ohc=Iiumq7E8QckAX-r2sZ9&oh=1f2290296c4441f615d35efa373d39ac&oe=5F23834A" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://scontent-del1-1.cdninstagram.com/v/t51.2885-15/e35/c64.0.548.548a/100898919_639147106680041_7770796487488702501_n.jpg?_nc_ht=scontent-del1-1.cdninstagram.com&_nc_cat=105&_nc_ohc=EFvEfz1QG6EAX9sWa7f&oh=6364634af761811d67568420f7cdc929&oe=5F20DD85" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://scontent-del1-1.cdninstagram.com/v/t51.2885-15/e35/c127.0.495.495a/100950429_172849147497410_8469189274443807895_n.jpg?_nc_ht=scontent-del1-1.cdninstagram.com&_nc_cat=102&_nc_ohc=T7Ojah6IIdMAX-00y8S&oh=1d45c37513e43357f0a91c74e886c67c&oe=5F20B204" alt="" class="w-100">
        </div>
    </div>
</div>
@endsection
