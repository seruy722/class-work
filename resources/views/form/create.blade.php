
@extends('layout')


@section('content')

<form action="{{ route('form.insert') }} " method="POST">
    {{ csrf_field() }}

    <input type="text" name="login">
    <input type="text" name="email">
    <input type="submit" value="Send">
</form>
@endsection