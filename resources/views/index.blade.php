@extends('app')


@section('contenido')
    <div class="container w-25 border p-4 mt-4">
        <form>

            <div class="mb-3">

              <label for="exampleInputName" class="form-label">Nombre</label>
              <input type="Name" style="text-transform:uppercase" class="form-control" id="exampleInputName">
            </div>
           <div class="mb-3">
              <label for="exampleMovil" class="form-label">TELEFONO</label>
              <input class="form-control" id="exampleInputMovil" >
              <div id="emailHelp" class="form-text">Nunca compartiremos su MOVIL con nadie más</div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection
