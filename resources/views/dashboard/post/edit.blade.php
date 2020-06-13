@extends('dashboard.master')
@section('content')
    @include('dashboard.partials.validation-errors')
    <form action="{{route("post.update",$post->id)}}" method="put" class="">
        @method('PUT')
        @include('dashboard.post._form')
    </form>
@endsection
    
