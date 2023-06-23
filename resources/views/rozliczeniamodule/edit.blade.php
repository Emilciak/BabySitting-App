<!DOCTYPE html>
<html>
@include('partials.head')
<body>
@include('partials.header')
 @include('partials.navi')

 <div id="zawartosc">
 <div class="container justify-content-center text-center">
    <h2 class="text-center mt-3 text-uppercase h4">Edytuj rozliczenie</h2>
    <form class="form-inline" action="<?=config('app.url'); ?>rozliczeniamodule/update/{{$myRozEdit->id}}" method="post">
    @csrf
    <p>
        <label for="id"> ID: </label>
        <input id="id" name="id" value="{{$myRozEdit->id}}" size="3" readonly>
    </p>
    <p>
        <label for="idZlecenia"> ID Zlecenia: </label>
        <input id="idZlecenia" name="idZlecenia" size="3" value="{{$myRozEdit->idZlecenia}}" required>
    </p>
    <p>
        <label for="idOpiekuna">ID Opiekuna: </label>
        <input id="idOpiekuna" name="idOpiekuna" value="{{$myRozEdit->idOpiekuna}}" size="3" required>
    </p>
    <p>
        <label for="rozliczenieFinansowe">Rozliczenie: </label>
        <input id="rozliczenieFinansowe" name="rozliczenieFinansowe" value="{{$myRozEdit->rozliczenieFinansowe}}" size="8" required>
       
    </p>
            <p><button type="submit" class="btn btn-light mb-2">Edytuj</button></p>
    </form>
    <p>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach (@errors->all() as $error)
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