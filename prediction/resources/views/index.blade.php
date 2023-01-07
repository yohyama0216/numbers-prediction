<h1>テスト</h1>

<table>
<td>
@foreach($data as $key => $item)
    <tr>
        <td>第{{$key}}回 日時{{$item['date']}} 当選数字{{$item['numbers']}}</td>
    </tr>
@endforeach
</td>
</table>