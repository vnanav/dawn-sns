<div class="right">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- Left Side Of Navbar -->
    <ul class="navbar-nav me-auto">

    </ul>

    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ms-auto">
      <!-- Authentication Links -->
      @guest
      @if (Route::has('login'))
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
      </li>
      @endif

      @if (Route::has('register'))
      <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
      </li>
      @endif
      @else
      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </div>
      </li>
      @endguest
    </ul>
  </div>
  <div class="right-top">
    <h2>Dawntownさんの</h2>
    <div class="right-top-follows">
      <ul class="right-top-follows-list">
        <li class="right-top-follows-item">フォロー数</li>
        <li class="right-top-follows-item">12名</li>
      </ul>
      <p class="right-top-follows-btn">
        <a class="btn btn-success" href="">フォローリスト</a>
      </p>
    </div>
    <div class="right-top-followers">
      <ul class="right-top-followers-list">
        <li class="right-top-followers-item">フォロワー数</li>
        <li class="right-top-followers-item">12000名</li>
      </ul>
      <p class="right-top-followers-btn">
        <a class="btn btn-success" href="post/create-form">フォロワーリスト</a>
      </p>
    </div>
  </div>
  <p class="right-bottom">
    <a class="btn btn-success" href="post/create-form">ユーザー検索</a>
  </p>
</div>
<!-- </div> -->
</div>
</main>
</div>
</body>

</html>
