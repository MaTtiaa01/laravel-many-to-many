@extends('layouts.app')

@section('content')

<div class="container">
    <div class="jumbo text-center my-5">
        <img width="200" src="{{asset('storage/' . $project->cover_img)}}" alt="">
    </div>
    <h1>{{$project->title}}</h1>
    <p>{{$project->description}}</p>
    <p>
        <strong>Type: </strong>
        {{$types[$project->type_id]->name}}
    </p>
</div>

@endsection