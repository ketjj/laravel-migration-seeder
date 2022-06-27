<header>

  <nav>
    <a href="{{ route('home')}}">
    <img src="https://image.shutterstock.com/image-vector/train-logo-design-600w-1144140572.jpgg" alt="logo train"></a>
   <ul>
      <li><a class="{{ Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{ route('home')}}">Home</a></li>
      <li><a class="{{ Route::currentRouteName() === 'trains' ? 'active' : ''}}" href="{{ route('trains')}}">Trains</a></li>
      <li><a class="{{ Route::currentRouteName() === 'about' ? 'active' : ''}}" href="{{ route('about')}}">About</a></li>
   </ul>

  </nav>
    </div>
  </nav>
</header>