<!DOCTYPE html>
<html>
@include('partials.head')
<body>
@include('partials.header')
 @include('partials.navi')

 <div id="zawartosc">
 <div class="container justify-content-center text-center">
    <h2 class="text-center mt-3 text-uppercase h4">Dodanie zlecenia</h2>
    <form class="form-inline" action="<?=config('app.url'); ?>zleceniemodule/save" method="post">
    @csrf
    <p>
        <label for="idDziecka"> id Dziecka: </label>
        <input id="idDziecka" name="idDziecka" size="3" required>
    </p>
    <p>
        <label for="idOpiekuna"> ID Opiekuna: </label>
        <input id="idOpiekuna" name="idOpiekuna" size="3" required>
    </p>
    <p>
        <label for="czasWminutach"> Czas w minutach: </label>
        <input id="czasWminutach" name="czasWminutach" size="5" required>
    </p>
    <p><button type="submit" class="btn btn-light mb-2">Dodaj</button></p>
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