<header>

  <div class="wrap-menu">
    <div class="logo">
      <a href="/">
        <img src="/img/logo/kamsia-logo-white.png" class="logo-img">
        <img src="/img/logo/kamsia-logo-reverse.png" class="logo-img-2">
        <img src="/img/logo/kamsia-title-white.png" class="title-img">
        <img src="/img/logo/kamsia-title-reverse.png" class="title-img-2">
      </a>
    </div>
    <ul class="navigation-menu">
      <li><a class="{{ ($url == 'home') ? 'active' : '' }}" href="{{ url('/') }}">Beranda</a></li>
      <li><a class="{{ ($url == 'fitur') ? 'active' : '' }}" href="{{ url('/fitur') }}">Fitur</a></li>
      <li><a class="{{ ($url == 'harga') ? 'active' : '' }}" href="{{ url('/harga') }}">Harga</a></li>
      <li class="downloadNav"><a href="/#download">Download</a></li>
    </ul>
    <div id="menu-toggle" class="fas fa-bars"></div>
  </div>

  <div class="wrap-download-btn">
    <div class="downloadBtn">
      <a class="btn btn-outline-warning" href="/#download">Download</a>
    </div>
  </div>

</header>