<!DOCTYPE html>
<html>
@include('partials.head')
<link rel="stylesheet" href="{{ URL::asset('styles.css') }}" />
<body>
<div class="hero">
<img src="{{ URL::asset('panda.png') }}" class="panda mx-auto d-block img-fluid" alt="panda">
</div>
 @include('partials.navi')

 <div id="zawartosc">
    <div class="container justify-content-center text-center">
    <h2 class="text-center mt-3 text-uppercase h4">Edytuj zlecenie</h2>
    <form class="form-inline" action="<?=config('app.url'); ?>zleceniemodule/update/{{$myZlecenieEdit->id}}" method="post">
    @csrf
    <p>
        <label for="id"> ID: </label>
        <input id="id" name="id" value="{{$myZlecenieEdit->id}}" size="3" readonly>
    </p>
    <p>
        <label for="idDziecka"> ID Dziecka: </label>
        <input id="idDziecka" name="idDziecka" size="3" value="{{$myZlecenieEdit->idDziecka}}" required>
    </p>
    <p>
        <label for="idOpiekuna">ID Opiekuna: </label>
        <input id="idOpiekuna" name="idOpiekuna" value="{{$myZlecenieEdit->idOpiekuna}}" size="3" required>
    </p>
    <p>
        <label for="czasWminutach">Czas w minutach: </label>
        <input id="czasWminutach" name="czasWminutach" value="{{$myZlecenieEdit->czasWminutach}}" size="5" required>
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
</div>
</body>
</html>