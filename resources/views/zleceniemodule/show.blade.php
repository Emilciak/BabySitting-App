<!DOCTYPE html>
<html>
@include('partials.head')
<body>
@include('partials.header')
 @include('partials.navi')

 <div id="zawartosc">
 <div class="container justify-content-center text-center">
    <h2 class="text-center mt-3 text-uppercase h4">Potwierdzenie usunięcia ID: {{$zleceniemodule->id}}</h2>
    <form class="form-inline" action="<?=config('app.url'); ?>zleceniemodule/delete/{{$zleceniemodule->id}}" method="post">
    @csrf
    <p>
        <label for="id"> ID: </label>
        <input id="id" name="id" value="{{$zleceniemodule->id}}" readonly>
    </p>
    <p>
        <label for="idDziecka"> idDziecka: </label>
        <input id="idDziecka" name="idDziecka" value="{{$zleceniemodule->idDziecka}}" readonly>
    </p>
    <p>
        <label for="idOpiekuna"> idOpiekuna: </label>
        <input id="idOpiekuna" name="idOpiekuna" value="{{$zleceniemodule->idOpiekuna}}" readonly>
    </p>
    <p>
        <label for="czasWminutach"> czasWminutach: </label>
        <input id="czasWminutach" name="czasWminutach" value="{{$zleceniemodule->czasWminutach}}" readonly>
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