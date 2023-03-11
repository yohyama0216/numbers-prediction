@extends('layouts.layout')

@section('title','統計')

@section('content')
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

    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

    <h2>統計</h2>
    <h3>数字と出現回数</h3>
    @if($data)
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <!-- todo ちょっと見出し変えたい -->
                    <th>数字</th>
                    <th>出現回数</th>
                    <th>当選数字</th>
                    <th>ストレート</th>
                    <th>当選口数</th>
                    <th>ボックス</th>
                    <th>当選口数</th>
                    <th>セット</th>
                    <th>当選口数</th>
                    <th>ミニ</th>
                    <th>当選口数</th>
                </tr>
            </thead>
            <tbody>
                <td>
                    @foreach($data as $key => $item)
                    <tr>
                        <td>{{$item->getTarget()}}</td>
                        <td>{{$item->getCount()}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    @endforeach
                </td>
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