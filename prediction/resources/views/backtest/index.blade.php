<h1>テスト</h1>

<table>
{{$data->displayTotalResult()}}
        <!--
@foreach($data as $key => $result)
    <tr>
 <td> 
           第{{$result->getResult()->getRound()}}回 {{$result->getType()}}
        </td> 
    </tr>
@endforeach
-->
</table>