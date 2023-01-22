<nav class=" d-flex justify-content-between align-items-center">
    {{-- logo --}}
    <img class="p-3 logo" src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="logoDC">
    {{-- link --}}
    <ul class="d-flex">
        @foreach ($navbar as $itemNav)
            <li><a class="btn btn-link" data-mdb-ripple-color="dark">{{$itemNav}}</a></li>
        @endforeach
     
    </ul>
    {{-- search --}}
    <li class="list-group-item"><a class="btn btn-link" data-mdb-ripple-color="dark">Search</a></li>
</nav>