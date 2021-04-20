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
      <form method="post" action="{{ route('voluntaris.store') }}">
          <div class="form-group">
              @csrf
              <label for="nif">Nif</label>
              <input type="text" class="form-control" name="nif"/>
          </div>
          <div class="form-group">
              <label for="nom">Nom</label>
              <input type="text" class="form-control" name="nom"/>
          </div>
          <div class="form-group">
              <label for="cognom">Cognom</label>
              <input type="text" class="form-control" name="cognom"/>
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
		<label for="comarca">Comarca</lable>
		<input type="text" class="form-control" name="comarca"/>
	  </div>
        <div class="form-group">
		<label for="fixe">Telefon Fixe</lable>
		<input type="text" class="form-control" name="fixe"/>
	  </div>
    <div class="form-group">
		<label for="mobil">Telefon Mobil</lable>
		<input type="text" class="form-control" name="mobil"/>
	  </div>
        <div class="form-group">
		<label for="email">Email</lable>
		<input type="text" class="form-control" name="email"/>
	  </div>
        <div class="form-group">
		<label for="edad">Edad</lable>
		<input type="text" class="form-control" name="edad"/>
	  </div>
        <div class="form-group">
		<label for="professio">Professio</lable>
		<input type="text" class="form-control" name="professio"/>
	  </div>
        <div class="form-group">
		<label for="hDedicades">Hores Dedicades</lable>
		<input type="text" class="form-control" name="hDedicades"/>
	  </div>
        <div class="form-group">
		<label for="nomOng">Nom de la Ong</lable>
		<input type="text" class="form-control" name="nomOng"/>
	  </div>

          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="{{ url('voluntaris') }}">Accés directe a la Llista de ongs</a>
@endsection
