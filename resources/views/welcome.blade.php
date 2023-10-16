<x-layout>
  @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
  @endif
  <div class="div blue">
  <div class="container">
    <div class="row">
      <div class="col-6 d-flex justify-content-center align-items-center">
        <h1>Dove ogni giocatore trova il proprio tesoro virtuale</h1>
      </div>
      <div class="col-6 d-flex justify-content-end align-items-end">
          <img src="/image/Zelda.svg" alt="Zelda" height="450" weight="370">
      </div>
    </div>
  </div>
</div>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-12">
      <h2 class="text-center display-6">I nostri best-sellers:</h2>
    </div>
    @foreach($prodotti as $prodotto)
    {{-- I dati devono essere passati tramite attributo e devono essere di tipo semplice  --}}
      <x-card productName="{{$prodotto['name']}}"
              productType="{{$prodotto['type']}}"
              productPrezzo="{{$prodotto['prezzo']}}"
              productImg="{{$prodotto['img']}}"/>
      @endforeach
    </div>
  </div>
</div>

</x-layout>
   
    
           
        
   







    