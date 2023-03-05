@extends('layouts.layout')

@section('title','統計')

@section('content')
@include('layouts.sidebarmenu', ['current' => 'backtest'])
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">統計</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
            </button>
        </div>
    </div>

    <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
    <h3>数字と出現回数</h3>
    <p>トータルリターン{{$data->calcTotalReturn()}}</p>
    <p>トータルコスト{{$data->calcTotalCost()}}</p>
    <p>損益 {{$data->calcTotalReturn() - $data->calcTotalCost()}}
    @if($data)
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <!-- todo ちょっと見出し変えたい -->
                    <th>合計回数</th>
                    <th>勝ち</th>
                    <th>負け</th>
                    <th>収益</th>
                    <th>費用</th>
                    <th>純利益</th>
                </tr>
            </thead>
            <tbody>

            @foreach($data as $key => $item)
                    @if($item->getHit())
                    <tr>
                        <td>{{$item->getHit()}}</td>
                        <td>{{$item->getReturn()}}</td>
                        <td>{{$item->getBuyNumbers()->calcCost()}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <div>見つかりませんでした。</div>
    @endif
</main>
@endsection

@section('side')
  @parent
  <ul>
    <li>ccc</li>
    <li>ddd</li>
  </ul>
@endsection