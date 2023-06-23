<!DOCTYPE html>
<html>
@include('partials.head')
<body>
@include('partials.header')
 @include('partials.navi')

 <div id="zawartosc">
 <div class="container justify-content-center text-center">
    <h2 class="text-center mt-3 text-uppercase h4">Potwierdzenie usunięcia ID: {{$rozliczeniamodule->id}}</h2>
    <form class="form-inline" action="<?=config('app.url'); ?>rozliczeniamodule/delete/{{$rozliczeniamodule->id}}" method="post">
    @csrf
    <p>
        <label for="id"> ID: </label>
        <input id="id" name="id" value="{{$rozliczeniamodule->id}}" readonly>
    </p>
    <p>
        <label for="idZlecenia"> idZlecenia: </label>
        <input id="idZlecenia" name="idZlecenia" value="{{$rozliczeniamodule->idDziecka}}" readonly>
    </p>
    <p>
        <label for="idOpiekuna"> idOpiekuna: </label>
        <input id="idOpiekuna" name="idOpiekuna" value="{{$rozliczeniamodule->idOpiekuna}}" readonly>
    </p>
    <p>
        <label for="rozliczenieFinansowe"> rozliczenieFinansowe: </label>
        <input id="rozliczenieFinansowe" name="rozliczenieFinansowe" value="{{$rozliczeniamodule->rozliczenieFinansowe}}" readonly>
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
</div>
</body>
</html>