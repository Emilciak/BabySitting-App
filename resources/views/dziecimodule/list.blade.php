<!DOCTYPE html>
<html lang="pl">
@include('partials.head')
<body>
@include('partials.header')
@include('partials.navi')
<div id="zawartosc">
    <div class="container text-align-center">
    <div class="text-center mt-3 dodanie">
 <a href="<?=config('app.url'); ?>dziecimodule/add"><i class="fa-brands fa-pagelines"></i>Dodaj dziecko<i class="fa-brands fa-pagelines"></i></a>
  </div> 
<table class="table table-bordered text-center mt-3">
    <tr>
        <th>ID</th>
        <th>Imię</th>
        <th>ID rodzica</th>
        <th>Usuń</th>
    </tr>
 @foreach($dziecko as $el)
<tr>
    <tr>
        <td>{{$el->id}}</td>
        <td>{{$el->imie}}</td>
        <td>{{$el->idRodzica}}</td>
        <td><a href="<?=config('app.url'); ?>dziecimodule/show/{{$el->id}}">Del</a></td>    
    </tr>
</tr>
 @endforeach
</div>
</div>
</body>
</html>
