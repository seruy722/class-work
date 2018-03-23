
@extends('layouts.app')


@section('content')

<form action="{{ route('form.insert') }} " method="POST">
    {{ csrf_field() }}

    <input type="text" name="name">
    <input type="text" name="teacher_fio">
    <input type="submit" value="Send">
</form>
@endsection