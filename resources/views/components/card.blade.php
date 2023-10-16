<div class="col-7">
    <div class="card" style="width: 18rem;">
      <img src="{{$productImg}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$productName}}</h5>
        <p class="card-text">{{$productType}}</p>
        <p class="card-text">{{$productPrezzo}}</p>
        <a href="{{route('service.detail', ['serviziName'=>$productName])}}" class="btn btn-primary">Vai al dettaglio</a>
      </div>
    </div>