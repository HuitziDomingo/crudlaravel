@extends('dashboard.master')
@section('content')
    @include('dashboard.partials.validation-errors')
    <form action="{{route("post.store")}}" method="POST" class="">
        @include('dashboard.post._form')
    </form>
@endsection
    
