<nav class=" d-flex justify-content-between align-items-center">
    {{-- logo --}}
    <a href="{{route('home')}}">
        <img class="p-3 logo" src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="logoDC">
    </a>
    
    {{-- link --}}
    <ul class="d-flex">
        @foreach ($navbar as $itemNav)
            <li><a href="{{route('games')}}" class="btn btn-link" data-mdb-ripple-color="dark">{{$itemNav}}</a></li>
        @endforeach
     
    </ul>
    {{-- search --}}
    <li class="list-group-item"><a class="btn btn-link" data-mdb-ripple-color="dark">Search</a></li>
</nav>