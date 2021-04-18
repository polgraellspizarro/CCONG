@extends('disseny')

@section('content')

<h1>Aplicació d'administració d'ong</h1>
<div class="card mt-5">
  <div class="card-header">
    Afegeix una nova ong
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif
      <form method="post" action="{{ route('ong.store') }}">
          <div class="form-group">
              @csrf
              <label for="cif">Cif</label>
              <input type="text" class="form-control" name="cif"/>
          </div>
          <div class="form-group">
              <label for="nom">Nom</label>
              <input type="text" class="form-control" name="nom"/>
          </div>
          <div class="form-group">
              <label for="adreca">Adreça</label>
              <input type="text" class="form-control" name="adreca"/>
          </div>
	  <div class="form-group">
		<label for="poblacio">Poblacio</label>
		<input type="text" class="form-control" name="poblacio"/>
	  </div>
	  <div class="form-group">
		<label for="comarca">Comarca</label>
		<input type="text" class="form-control" name="comarca"/>
	  </div>
	  <div class="form-group">
		<label for="tipus">Tipus</lable>
		<input type="text" class="form-control" name="tipus"/>
	  </div>
          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="{{ url('ong') }}">Accés directe a la Llista de ongs</a>
@endsection
