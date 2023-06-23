<!DOCTYPE html>
<html>
@include('partials.head')
<body>
@include('partials.header')
 @include('partials.navi')

 <div id="zawartosc">
 <div class="container justify-content-center text-center">
    <h2>Edytuj rodzica</h2>
    <form class="form-inline" action="<?=config('app.url'); ?>rodzicemodule/update/{{$myRodziceEdit->id}}" method="post">
    @csrf
    <p>
        <label for="id"> ID: </label>
        <input id="id" name="id" size="3" value="{{$myRodziceEdit->id}}" readonly>
    </p>
    <p>
        <label for="imie"> Imię: </label>
        <input id="imie" name="imie" size="10" value="{{$myRodziceEdit->imie}}"size="25" required>
    </p>
    <p>
        <label for="nazwisko">Nazwisko: </label>
        <input id="nazwisko" name="nazwisko"size="15" value="{{$myRodziceEdit->nazwisko}}" size="25" required>
    </p>
    <p>
        <label for="ileDzieci">Ile dzieci: </label>
        <input id="ileDzieci" name="ileDzieci"size="3" value="{{$myRodziceEdit->ileDzieci}}" required>
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