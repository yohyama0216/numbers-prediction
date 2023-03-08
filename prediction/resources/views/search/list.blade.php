@extends('layouts.layout')

@section('title','検索')

@section('content')
<main class="col-md-8 offset-md-2 border border-dark">
<section>
<h2 id="accented-tables">過去の抽選検索<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#accented-tables" style="padding-left: 0.375em;"></a></h2>
<h3 id="striped-rows">検索条件<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#striped-rows" style="padding-left: 0.375em;"></a></h3>
<form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">State</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Zip</label>
    <input type="text" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="mx-auto">
    <button class="btn btn-primary" type="submit">Submit form</button>
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