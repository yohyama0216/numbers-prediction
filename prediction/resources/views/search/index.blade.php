@extends('layouts.layout')

@section('title','ヘッダー')

@section('content')
<h1>検索</h1>

<table>
<td>
@foreach($data as $key => $item)
    <tr>
        <td>
            第{{$item->getRound()}}回
            日時{{$item->getDateTime()}}
            当選数字{{$item->getDrawingNumbers3Result()->getNumbers()->toString()}}
            100位 {{$item->getDrawingNumbers3Result()->getNumbers()->getDigit100()}}
        </td>
    </tr>
@endforeach
</td>
</table>
@endsection

@section('side')
  @parent
  <ul>
    <li>ccc</li>
    <li>ddd</li>
  </ul>
@endsection