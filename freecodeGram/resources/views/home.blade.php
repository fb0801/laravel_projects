@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
`   <img  src="https://scontent-lhr8-2.cdninstagram.com/v/t51.2885-19/97566921_2973768799380412_5562195854791540736_n.jpg?stp=dst-jpg_s320x320&_nc_ht=scontent-lhr8-2.cdninstagram.com&_nc_cat=104&_nc_ohc=EW5oaf0I4mYAX_hUGuq&edm=AOQ1c0wBAAAA&ccb=7-5&oh=00_AfBxH5EVJ7GGL4hhVfNBZ6afUnoplKRyB3goDCDutrzhjA&oe=64AE2A9F&_nc_sid=8b3546" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username}}</h1></div>
            <div class="d-flex">
                <div class="pr-4"><strong>153</strong>Posts</div>
                <div class="pr-4"><strong>23k</strong>Followers</div>
                <div class="pr-4"><strong>212</strong>Following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
                <div><a href="#">{{ $user->profile->url ?? }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4" class="w-100">
            <img src="">
        </div>

        <div class="col-4" class="w-100">
            <img src="">
        </div>

        <div class="col-4" class="w-100">
            <img src="">
        </div>

    </div>
</div>
@endsection
