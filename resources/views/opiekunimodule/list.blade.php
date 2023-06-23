<!DOCTYPE html>
<html lang="pl">
@include('partials.head')
<body>
@include('partials.header')
@include('partials.navi')
<div id="zawartosc">
<div class="container text-align-center">
    <div class="text-center mt-3 dodanie">
 <a href="<?=config('app.url'); ?>opiekunimodule/add"><i class="fa-brands fa-pagelines"></i>Dodaj opiekuna<i class="fa-brands fa-pagelines"></i></a>
  </div> 
<table class="table table-bordered text-center mt-3"> 
    <tr>
        <th>ID</th>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Wiek</th>
        <th>Ile lat w zawodzie</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
 @foreach($opiekun as $el)
<tr>
    <tr>
        <td>{{$el->id}}</td>
        <td>{{$el->imie}}</td>
        <td>{{$el->nazwisko}}</td>
        <td>{{$el->wiek}}</td>
        <td>{{$el->ileLatWzawodzie}}</td>
        <td><a href="<?=config('app.url'); ?>opiekunimodule/edit/{{$el->id}}">Edit</a></td>
        <td><a href="<?=config('app.url'); ?>opiekunimodule/show/{{$el->id}}">Del</a></td>    
    </tr>
</tr>
 @endforeach
</div>
</div>
</body>
</html>
