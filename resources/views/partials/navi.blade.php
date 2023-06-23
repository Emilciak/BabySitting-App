<!-- <nav class="w-auto">
 <ul class="nav flex-column">
  <li class="nav-item">
    <a class="nav-link" href="<?=config('app.url'); ?>rodzicemodule/list">Lista rodzicow</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?=config('app.url'); ?>rodzicemodule/add">Dodaj rodzica</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?=config('app.url'); ?>dziecimodule/list">Lista dzieci</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?=config('app.url'); ?>dziecimodule/add">Dodaj dziecko</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?=config('app.url'); ?>opiekunimodule/list">Lista opiekunów</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?=config('app.url'); ?>opiekunimodule/add">Dodaj opiekuna</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?=config('app.url'); ?>zleceniemodule/list">Lista zleceń</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?=config('app.url'); ?>zleceniemodule/add">Dodaj zlecenie</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?=config('app.url'); ?>rozliczeniamodule/list">Lista rozliczen</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?=config('app.url'); ?>rozliczeniamodule/add">Dodaj rozliczenie</a>
  </li>
  <li class="nav-item">
    @if(Auth::check())
    <a class="nav-link" href="./wyloguj">Wyloguj się</a>
    </li>
    <li class="nav-item">
    @else
    <a class="nav-link" href="./loguj">Zaloguj się</a>
    @endif
    </li>
   
</ul>
</nav> -->

<nav>
<ul class="nav justify-content-center text-uppercase">
  <li class="nav-item">
  <a class="nav-link" href="<?=config('app.url'); ?>">BabySittng</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="<?=config('app.url'); ?>rodzicemodule/list">Rodzice</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="<?=config('app.url'); ?>dziecimodule/list">Dzieci</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="<?=config('app.url'); ?>opiekunimodule/list">Opiekuni</a>
  </li>
   <li class="nav-item">
   <a class="nav-link" href="<?=config('app.url'); ?>zleceniemodule/list">Zlecenia</a>
  </li>
    <li class="nav-item">
    <a class="nav-link" href="<?=config('app.url'); ?>rozliczeniamodule/list">Rozliczenia</a>
  </li>
  <li class="nav-item">
    @if(Auth::check())
    <a class="nav-link" href="./wyloguj">Wyloguj się</a>
    </li>
    <li class="nav-item">
    @else
    <a class="nav-link" href="./loguj">Zaloguj się</a>
    @endif
    </li>
</ul>
</nav>