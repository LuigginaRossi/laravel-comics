<div class="bg-second-footer">
    <div class="container d-flex justify-content-between align-items-center py-3">
        <button>SING-UP NOW</button>

        <div class="social-container d-flex  align-items-center gap-3">
            <div>FOLLOW US</div>
            @foreach ($secondFooter as $item)
                <img src="{{Vite::asset($item)}}" alt="">
            @endforeach
        </div>
    </div>
</div>