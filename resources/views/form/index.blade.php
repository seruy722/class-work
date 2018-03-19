@extends('layout')


@section('content')
 <p><a href="{{ route('form.create') }}">Create</a></p>
<table>
    @foreach($users as $user)
    <tr>
        <td>{{ $user->id}}</td>
        <td>{{ $user->login}}</td>
        <td>{{ $user->email}}</td>
        <td><a href="{{ route('form.update',$user->id) }}">Редактировать</a></td>
        <td><a href="{{ route('form.delete',$user->id) }}">Удалить</a></td>
    </tr>
    @endforeach
    
</table>

@endsection