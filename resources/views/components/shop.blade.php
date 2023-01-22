<div class="bg-shop">
    
    <div class="container d-flex justify-content-around py-3">
        @foreach ($shopList as $shopEl)
            
            <div class="d-flex align-items-center">
                <div class="img-container">
                    <img src="{{Vite::asset($shopEl["img"])}}" alt="" class="shop-img">
                </div>
                <div class="px-3">{{$shopEl["title"]}}</div>
            </div>
        
        @endforeach
    </div>
        
</div>

