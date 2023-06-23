<!DOCTYPE html>
<html lang="pl">
@include('partials.head')
<body>
@include('partials.header')
@include('partials.navi')
<div id="zawartosc">
<div class="container text-align-center">
    <div class="text-center mt-3 dodanie">
 <a href="<?=config('app.url'); ?>rodzicemodule/add"><i class="fa-brands fa-pagelines"></i>Dodaj rodzica<i class="fa-brands fa-pagelines"></i></a>
  </div> 
    <table class="table table-bordered text-center mt-3"> 
        <tr>
            <th scope="col">ID</th>
        <th scope="col">Imię</th>
        <th scope="col">Nazwisko</th>
        <th scope="col">Ile dzieci</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
    </tr>
 @foreach($rodzic as $el)
 <tr>
     <tr>
         <td>{{$el->id}}</td>
        <td><a href = '<?=config('app.url'); ?>rodzicemodule/dzieci/{{$el->id}}'>{{$el->imie}}</a></td>
        <td>{{$el->nazwisko}}</td>
        <td>{{$el->ileDzieci}}</td>
        <td><a href="<?=config('app.url'); ?>rodzicemodule/edit/{{$el->id}}">Edit</a></td>
        <td><a href="<?=config('app.url'); ?>rodzicemodule/show/{{$el->id}}">Del</a></td>    
    </tr>
</tr>
 @endforeach
 </div>
</div>
</div>
</body>
</html>
