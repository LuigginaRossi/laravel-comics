<div class="bg-footer">
    <div class="container text-light py-3">
        <div class="row">
            <div class="col-6">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li><h4>DC COMICS</h4></li>
                                @foreach ($footerList[0] as $itemList)
                                <li >{{$itemList}}</li>
                                @endforeach
                                <br> <br>
                                <li><h4>SHOP</h4></li>
                                @foreach ($footerList[1] as $itemList)
                                <li >{{$itemList}}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li><h4>DC</h4></li>

                                @foreach ($footerList[2] as $itemList)
                                <li >{{$itemList}}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li><h4>SITES</h4></li>
                                @foreach ($footerList[3] as $itemList)
                                <li >{{$itemList}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="col-6">
                <img class="img-footer" src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="">
            </div>
        </div>
    </div>
</div>