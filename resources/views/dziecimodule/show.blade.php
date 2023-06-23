<!DOCTYPE html>
<html>
@include('partials.head')
<body>
@include('partials.header')
 @include('partials.navi')

 <div id="zawartosc">
 <div class="container justify-content-center text-center">
    <h2 class="text-center mt-3 text-uppercase h4">Potwierdzenie usunięcia dziecka o ID: {{$dziecimodule->id}}</h2>
    <form class="form-inline" action="<?=config('app.url'); ?>dziecimodule/delete/{{$dziecimodule->id}}" method="post">
    @csrf
    <p>
        <label for="id"> ID: </label>
        <input id="id" name="id" value="{{$dziecimodule->id}}" readonly>
    </p>
    <p>
        <label for="imie"> imie: </label>
        <input id="imie" name="imie" value="{{$dziecimodule->imie}}" readonly>
    </p>
    <p>
        <label for="idRodzica"> idRodzica: </label>
        <input id="idRodzica" name="idRodzica" value="{{$dziecimodule->idRodzica}}" readonly>
    </p>
    <p><button type="submit" class="btn btn-light mb-2">Usuń</button></p>
    </form>
    <p>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </p>        
</div>
</body>
</html>