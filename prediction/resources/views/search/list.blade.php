@extends('layouts.layout')

@section('title','検索')

@section('content')
<main class="col-md-8 offset-md-2 border border-dark">
  <section>
    <h3 id="accented-tables">過去の抽選検索<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#accented-tables" style="padding-left: 0.375em;"></a></h2>
      <h4 id="striped-rows">簡易検索<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#striped-rows" style="padding-left: 0.375em;"></a>
    </h3>
    <!-- navbar　ほしい-->
    <form class="g-3 needs-validation" action="" method="get">
      <div class="row">
        <div class="col-md-3">
          <!-- <label for="validationCustomUsername" class="form-label">Username</label> -->
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">回号</span>
            <input type="text" class="form-control" placeholder="1111" aria-describedby="inputGroupPrepend">
            <div class="invalid-feedback">
              Please choose a username.
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <!-- <label for="validationCustomUsername" class="form-label">Username</label> -->
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">当せん数字</span>
            <input type="text" class="form-control" name="numbers" placeholder="777" aria-describedby="inputGroupPrepend">
            <div class="invalid-feedback">
              Please choose a username.
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">日時</span>
            <input type="text" class="form-control" name="" placeholder="2001-01-01" aria-label="dateFrom">
            <span class="input-group-text">～</span>
            <input type="text" class="form-control" name="" placeholder="2002-01-01" aria-label="dateTo">
          </div>
        </div>
      </div>
      <h4 id="striped-rows">詳細検索<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#striped-rows" style="padding-left: 0.375em;"></a></h3>
        <div class="row">
          <div class="col-md-6">
            <div class="input-group mb-3">
              <label class="input-group-text" for="inputGroupSelect01">特殊な数字</label>
              <select class="form-select" id="inputGroupSelect01">
                <option selected>選択</option>
                <option value="1">全桁が同じ数字（例、111）</option>
                <option value="2">階段数字（例、123）</option>
                <option value="3">鏡数字（例、121）</option>
                <option value="4">ひっぱり数字（例、121）</option>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">出現パターン</span>
              <span class="input-group-text" id="basic-addon1">始め</span>
              <input type="text" class="form-control" name="" placeholder="100" aria-label="dateFrom">
              <span class="input-group-text">次</span>
              <input type="text" class="form-control" name="" placeholder="101" aria-label="dateTo">
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="mx-auto">
            <button class="btn btn-primary" type="submit">検索</button>
          </div>
        </div>
    </form>
  </section>



  <!-- <h3 id="striped-rows">Striped rows<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#striped-rows" style="padding-left: 0.375em;"></a></h3> -->
  <section class="mx-auto mt-4">
    <p><code>&lt;tbody&gt;</code>内のテーブル行に zebra-striping を追加するには、<code>.table-striped</code>を使用します。</p>
    @if($data)
    <div class="border table-responsive">
      <table class="table table-striped table-sm px-1">
        <thead>
          <tr>
            <th scope="col">回号</th>
            <th scope="col">日時</th>
            <th scope="col">当選数字</th>
            <th scope="col">当選口数</th>
            <th scope="col">ボックス</th>
            <th scope="col">当選口数</th>
            <th scope="col">セット</th>
            <th scope="col">当選口数</th>
            <th scope="col">ミニ</th>
            <th scope="col">当選口数</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $key => $item)
          <tr>
            <th scope="row">{{$item->getRound()->toString()}}</th>
            <td>{{$item->getDate()}}</td>
            <td>{{$item->getResultNumbers()}} <a href="">さらに探す</a></td>
            <td>{{$item->getPrize('straight')}}</td>
            <td></td>
            <td>{{$item->getPrize('box')}}</td>
            <td></td>
            <td>{{$item->getPrize('set')}}</td>
            <td></td>
            <td>{{$item->getPrize('mini')}}</td>
            <td></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    @else
    <div>見つかりませんでした。</div>
    @endif
  </section>
</main>
@endsection

@section('side')
@parent
<ul>
  <li>ccc</li>
  <li>ddd</li>
</ul>
@endsection