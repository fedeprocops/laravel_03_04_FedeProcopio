<x-layout>

<div class="container">
    <div class="row d-flex">
        <h3 display-3 class="justify-content-center text-center py-4">Contattaci</h3>
        <div class="col-4 justify-content-start align-items-start">
            <img src="/image/Zelda.svg" alt="Zelda" height="450" weight="370">
        </div>
        <div class="col-6 justify-content-start align-items-center">

            <form method="POST" action="{{route('contattaci_submit')}}" >
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Nome Completo</label>
                  <input type="text" name="name" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-floating">
                  <textarea class="form-control" name="message" id="message" cols="5" rows="10"></textarea>
                  <label class="form-check-label" for="message">Lascia il tuo messaggio</label>
                </div>
                <button type="submit" class="btn btn-primary">Contattaci</button>
              </form>
        </div>
    </div>
  </div>

</x-layout>