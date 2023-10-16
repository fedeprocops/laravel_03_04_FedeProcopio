<x-layout>   
      <h1 class="text-center"> Ecco i nostri best seller</h1>
      <div class="container-fluid">
        <div class="row">
            <div class="d-flex flex-row">
            @foreach ($products as $product)
                <div class="col-4 d-flex align-items-center">
                    <div class="card" style="width: 18rem;">
                        <img src="{{$product['img']}}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">{{$product['name']}}</h5>
                          <p class="card-text">{{$product['description']}}</p>
                          <p class="card-text">{{$product['prezzo']}}</p>
                          <a href="{{route('product.detail', ['productDetail'=>$product['name']])}}" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>
            @endforeach
            </div>
        </div>
      </div>
   

    </x-layout>





   