<!DOCTYPE html>
<html lang="pl">
@include('partials.head')
<link rel="stylesheet" href="../styles.css">
<body>
<div class="hero">
<img src="../panda.png" class="panda mx-auto d-block img-fluid" alt="panda">
</div>
@include('partials.navi')
<div id="zawartosc">
    <div class="container text-align-center">
    <div class="text-center mt-3 dodanie">
 <a href="<?=config('app.url'); ?>zleceniemodule/add"><i class="fa-brands fa-pagelines"></i>Dodaj zlecenie<i class="fa-brands fa-pagelines"></i></a>
  </div> 

<table class="table table-bordered text-center mt-3">
    <tr>
        <th>ID</th>
        <th>ID Dziecka</th>
        <th>ID Opiekuna</th>
        <th>czas w minutach</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
 @foreach($zlecenia as $el)
<tr>
    <tr>
        <td>{{$el->id}}</td>
        <td>{{$el->idDziecka}}</td>
        <td>{{$el->idOpiekuna}}</td>
        <td>{{$el->czasWminutach}}</td>
        <td><a href="<?=config('app.url'); ?>zleceniemodule/edit/{{$el->id}}">Edit</a></td>
        <td><a href="<?=config('app.url'); ?>zleceniemodule/show/{{$el->id}}">Del</a></td>    
    </tr>
</tr>
 @endforeach
</div>
</div>
</body>
</html>
