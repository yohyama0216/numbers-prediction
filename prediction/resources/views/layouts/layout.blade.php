<body>
  <div class="title">
    @yield('title')
  </div>

  <div class="content">
    @yield('content')
  </div>

  <div class="side">
    @section('side')
    <p>サイドメニュー</p>
    @show
  </div>
</body>