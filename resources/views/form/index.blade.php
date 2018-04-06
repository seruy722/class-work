@extends('layouts.app')


@section('content')
 <!--<p><a href="{{ route('form.create') }}">Создать</a></p>-->
 <table class="table-striped  table">
<!--    @foreach($users as $user)
    <tr>
        <td>{{ $user->id}}</td>
        <td>{{ $user->name}}</td>
        <td>{{ $user->teacher_fio}}</td>
        <td><a href="{{ route('form.update',$user->id) }}">Редактировать</a></td>
        <td><a href="{{ route('form.delete',$user->id) }}">Удалить</a></td>
    </tr>
    @endforeach-->
    
</table>
<!-- {{$users->links()}}
     @foreach($sub as $user)
        {{$user}}
    @endforeach
@endsection-->
@php 
    $curl = curl_init('http://www.cbr.ru/rss/RssNews');
        //запись идентична
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
    //curl_setopt($curl,CURLOPT_NOBODY,1);
    $result = curl_exec($curl);
    curl_close($curl);
    $xml   = new SimpleXMLElement($result);;

    
var_dump($xml);

$soap = new SoapClient('http://www.cbr.ru/DailyInfoWebServ/DailyInfo.asmx?wsdl');
$res = $soap->GetCursOnDateXML(['On_date'=>'2018-05-06']);

$str = $res->GetCursOnDateXMLResult->any;
$xml   = simplexml_load_string($str);
$array = json_decode(json_encode((array) $xml), true);
$array = array($xml->getName() => $array);





@endphp

