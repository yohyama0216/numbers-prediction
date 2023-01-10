<h1>テスト</h1>

<table>
@foreach($data as $key => $result)
    <tr>
 <td> 
           数字{{$key}} : {{$result}}回
        </td> 
    </tr>
@endforeach
</table>