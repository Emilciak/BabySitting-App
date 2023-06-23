<!DOCTYPE html>
<html>
@include('partials.head')
<body>
@include('partials.header')
 @include('partials.navi')

 <div id="zawartosc">
 <div class="container justify-content-center text-center">
    <h2 class="text-center mt-3 text-uppercase h4">Edytuj opiekuna</h2>
    <form class="form-inline" action="<?=config('app.url'); ?>opiekunimodule/update/{{$myOpiekunEdit->id}}" method="post">
    @csrf
    <p>
        <label for="id"> ID: </label>
        <input id="id" name="id" size="3" value="{{$myOpiekunEdit->id}}" readonly>
    </p>
    <p>
        <label for="imie"> Imię: </label>
        <input id="imie" name="imie" size="25" value="{{$myOpiekunEdit->imie}}" required>
    </p>
    <p>
        <label for="nazwisko">Nazwisko: </label>
        <input id="nazwisko" name="nazwisko" value="{{$myOpiekunEdit->nazwisko}}" size="25" required>
    </p>
    <p>
        <label for="wiek">Wiek: </label>
        <input id="wiek" name="wiek" value="{{$myOpiekunEdit->wiek}}" size="3" required>
    </p>
    <p>
        <label for="ileLatWzawodzie">Ile lat w zawodzie: </label>
        <input id="ileLatWzawodzie" name="ileLatWzawodzie" value="{{$myOpiekunEdit->ileLatWzawodzie}}" size="3" required>
    </p>
            <p><button type="submit" class="btn btn-light mb-2">Edytuj</button></p>
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