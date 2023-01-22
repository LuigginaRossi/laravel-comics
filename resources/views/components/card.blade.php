{{-- single card --}}
@foreach ($posterComics as $key =>$poster)
    <div class="col"> 
        <div class="card">
            <img src="{{$posterComics[$key]['thumb']}}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{$posterComics[$key]['title']}}</h5>
            <p class="card-text">{{$posterComics[$key]['price']}}</p>
            <p class="card-text">{{$posterComics[$key]['sale_date']}}</p>
            <p class="card-text">{{$posterComics[$key]['type']}}</p>
            <p class="card-text">{{$posterComics[$key]['series']}}</p>
            </div>
        </div>
    </div>
@endforeach
    
