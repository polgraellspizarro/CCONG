@extends('disseny')

@section('content')

<h1>Aplicació d'administració d'usuaris</h1>
<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou usuari
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
              <label for="cif">Username</label>
              <input type="text" class="form-control" name="cif"/>
          </div>
          <div class="form-group">
              <label for="nom">Password</label>
              <input type="text" class="form-control" name="nom"/>
          </div>
          <div class="form-group">
              <label for="adreca">Nom</label>
              <input type="text" class="form-control" name="adreca"/>
          </div>
	  <div class="form-group">
		<label for="poblacio">Cognom</label>
		<input type="text" class="form-control" name="poblacio"/>
	  </div>
	  <div class="form-group">
		<label for="comarca">Email</label>
		<input type="text" class="form-control" name="comarca"/>
	  </div>
	  <div class="form-group">
		<label for="tipus">Mobil</lable>
		<input type="text" class="form-control" name="tipus"/>
	  </div>
      <div class="form-group">
		<label for="tipus">admin</lable>
		<input type="text" class="form-control" name="admin"/>
	  </div>
          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="{{ url('ong') }}">Accés directe a la Llista d'usuaris</a>
@endsection
