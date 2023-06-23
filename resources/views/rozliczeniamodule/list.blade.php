<!DOCTYPE html>
<html lang="pl">
@include('partials.head')
<body>
@include('partials.header')
@include('partials.navi')
<div id="zawartosc">
<div class="container text-align-center">
    <div class="text-center mt-3 dodanie">
 <a href="<?=config('app.url'); ?>rozliczeniamodule/add"><i class="fa-brands fa-pagelines"></i>Dodaj rozliczenie<i class="fa-brands fa-pagelines"></i></a>
  </div> 
<table class="table table-bordered text-center mt-3">
    <tr>
        <th>ID</th>
        <th>ID Zlecenia</th>
        <th>ID Opiekuna</th>
        <th>Rozliczenie</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
 @foreach($rozliczenia as $el)
<tr>
    <tr>
        <td>{{$el->id}}</td>
        <td>{{$el->idZlecenia}}</td>
        <td>{{$el->idOpiekuna}}</td>
        <td>{{$el->rozliczenieFinansowe}} zł</td>
        <td><a href="<?=config('app.url'); ?>rozliczeniamodule/edit/{{$el->id}}">Edit</a></td>
        <td><a href="<?=config('app.url'); ?>rozliczeniamodule/show/{{$el->id}}">Del</a></td>    
    </tr>
</tr>
 @endforeach
</div>
</div>
</div>
</body>
</html>
