<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
     <a href="index.html">
      <img src="/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
      <h5 class="logo-text">Absen</h5>
    </a>
    </div>
    @if (auth()->user())
    <form action="/logout" method="post">
      @csrf
      <button class="btn btn-outline-light">Logout</button>
    </form>
    <a href="/recapts">Home</a>
    {{-- <a href="/logout">Logout</a> --}}
    @else
    <ul class="sidebar-menu do-nicescrol">
     <li class="sidebar-header">MAIN NAVIGATION</li>
     <li>
       <a href="index.html" class="waves-effect">
         <i class="icon-home"></i> <span>Kelas</span> <i class="fa fa-angle-left pull-right"></i>
       </a>
       <ul class="sidebar-submenu">
         @foreach ($kelas as $item)
          <li><a href="/absen/{{ $item->kelas }}"><i class="fa fa-circle-o"></i>{{ $item->kelas }}</a></li>
         @endforeach
       </ul>
     </li>
    </ul>
    <ul>
      <li><a href="/login">Login</a></li>
    </ul>
    @endif
  </div>