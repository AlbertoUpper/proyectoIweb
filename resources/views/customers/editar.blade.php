@if (Auth::user()->tipo == 2)
  <script>window.location="/productos";</script>
@endif
 @extends('main')

 @section('title')
 Editar cliente
 @endsection

 @section('content')
  <div class="mt-5">
    <h1>Editar Cliente</h1>
    @foreach($errors->all() as $error)
      <p class="alert alert-danger alert-dismissible">{{ $error }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button></p>
    @endforeach
     <form action="/clientes/modificar/{{ $cliente->CustomerID }}" method="POST">
      <input type="hidden" name="_method" value="POST">      
      {{  csrf_field() }}
      <div class="row">
        <div class="col-4">
          <div class="form-group">
            <label for="nombreCompania">Nombre de la compañia:</label>
            <input type="text" id="nombreCompania" name="nombreCompania" value="{{ $cliente->CompanyName }}" class="form-control">
          </div>
        </div>
        <div class="col-4">
          <div class="form-group">
            <label for="nombreContacto">Nombre del contacto:</label>
            <input type="text" id="nombreContacto" name="nombreContacto" value="{{ $cliente->ContactName }}" class="form-control">
          </div>
        </div>
      </div>
       <div class="row">
        <div class="col-4">
          <div class="form-group">
            <label for="direccion">Dirección:</label>
            <textarea name="direccion" id="direccion" rows="2" style="width: 100%">{{ $cliente->Address }}</textarea>
          </div>
        </div>
        <div class="col-4">
          <div class="form-group">
            <label for="telefono">Telefono:</label>
            <input type="text" id="telefono" name="telefono" value="{{ $cliente->Phone }}" class="form-control">
          </div>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-5">
          <div class="form-group">
            <input class="btn btn-primary mr-1" type="submit" value="Guardar">
            <a href="{{ url('clientes') }}" class="btn btn-dark text-white"> Cancelar</a>
          </div>
        </div>
        
      </div>
    </form>
 @endsection
