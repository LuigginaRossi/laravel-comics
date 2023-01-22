<main class="bg-dark">
    {{-- cards-container --}}
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 row-cols-md-6 g-4">    
            @include('components.card')    
        </div>
        <div class="text-center py-5">
            <button class="btn btn-primary">LOAD MORE</button>
        </div>
    </div>
        

</main>