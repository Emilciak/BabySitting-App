<!DOCTYPE html>
<html>
@include('partials.head')
<body>
@include('partials.header')
 @include('partials.navi')

 <div id="zawartosc">
 <div class="container justify-content-center text-center">
    <h2 class="text-center mt-3 text-uppercase h4">Dodanie rodzica</h2>
    <div class="container">
    <form class="form-inline" action="<?=config('app.url'); ?>rodzicemodule/save" method="post">
    @csrf
    <p>
        <label for="imie"> Imie: </label>
        <input id="imie" name="imie" size="25" required>
    </p>
    <p>
        <label for="nazwisko"> Nazwisko: </label>
        <input id="nazwisko" name="nazwisko" size="25" required>
    </p>
    <p>
        <label for="ileDzieci"> Ile dzieci: </label>
        <input id="ileDzieci" size="3" name="ileDzieci" required>
    </p>
    
    <p><button type="submit" class="btn btn-light mb-2">Dojaj</button></p>
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