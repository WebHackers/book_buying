
@section('head')

@show

<nav class="uk-navbar uk-grid" id="menu">
  <div class="uk-width-1-6"><br></div>
  <div class="uk-width-4-6" id="menu-item">
    <ul class="uk-navbar-nav uk-container uk-container-center">
      <li <?php if($position=='')echo 'class="uk-active"'; ?> >
        <a href="/">书目列表</a>
      </li>
      <li <?php if($position=='recommend')echo 'class="uk-active"'; ?> >
        <a href="/recommend">我要推荐</a>
      </li>
      <li <?php if($position=='personal')echo 'class="uk-active"'; ?> >
        <a href="/personal">个人中心</a>
      </li>
      @if ($user->user_rank=='购书管理')
      <li class="uk-parent <?php if($position=='admin')echo 'uk-active'; ?>" data-uk-dropdown>
        <a>购书管理</a>
        <div class="uk-dropdown uk-dropdown-navbar">
          <ul class="uk-nav uk-nav-navbar">
            <li><a href="/admin">未购买</a></li>
            <li><a href="/admin?status=true">已购买</a></li>
            <li><a href="/activity">购书活动</a></li>
          </ul>
      	</div>
      </li>
      @endif
    </ul>

    <div class="uk-navbar-flip" id="logout-btn">
      <ul class="uk-navbar-nav">
        <li><a href="#">{{$user->user_name}}</a></li>
        <li><a href="/logout">Logout</a></li>
      </ul>
    </div>
  </div>
  <div class="uk-width-1-6"><br></div>
</nav>

<div class="uk-grid" id="content">
  <div class="uk-width-1-6"><br></div>
  <div class="uk-width-4-6"><br>

@if($message)
<div class="uk-alert" data-uk-alert>
  <a href="" class="uk-alert-close uk-close"></a>
  <p style="text-align:center;">{{$message}}</p>
</div>
@endif

@section('body')

@show

  </div>
  <div class="uk-width-1-6"><br></div>
</div>
</body>
</html>