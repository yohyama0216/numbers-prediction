<h1>テスト</h1>

<table>
<td>
@foreach($data as $key => $item)
    <tr>
        <td>第{{$item->getRound()}}回 日時{{$item->getDate()}} 当選数字{{$item->getNumbersString()}}</td>
    </tr>
@endforeach
</td>
</table>