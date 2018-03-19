
@extends('layout')


@section('content')

<form action="{{ route('form.add',$user->id) }} " method="POST">
    {{ csrf_field() }}
    <input type="text" name="id" value="{{$user->id}}">
    <input type="text" name="login" value="{{$user->login}}">
    <input type="text" name="email" value="{{$user->email}}">
    <input type="submit" value="Send">
</form>
@endsection