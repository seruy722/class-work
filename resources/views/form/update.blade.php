
@extends('layouts.app')


@section('content')

<form action="{{ route('form.add',$user->id) }} " method="POST">
    {{ csrf_field() }}
    <input type="text" name="id" value="{{$user->id}}">
    <input type="text" name="name" value="{{$user->name}}">
    <input type="text" name="teacher_fio" value="{{$user->teacher_fio}}">
    <input type="submit" value="Send">
</form>
@endsection