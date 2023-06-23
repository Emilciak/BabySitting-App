<!DOCTYPE html>
<html lang="pl">
@include('partials.head')

<body>
@include('partials.header')
    @include('partials.navi')
    <div id="zawartosc">
    <div class="container justify-content-center text-center">
        <h1 class="text-center mt-3 text-uppercase h4">Lista dzieci przypisanych do rodzica: {{$rodzic->imie}}</h1>
        <table class="table table-bordered text-center mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>imie</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dzieci as $el)
                <tr>
                    <td>{{$el->id}}</td>
                    <td>{{$el->imie}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>

</html>