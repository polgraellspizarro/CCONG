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
      <form method="post" action="{{ route('usuaris.store') }}">
          <div class="form-group">
              @csrf
              <label for="username">Username</label>
              <input type="text" class="form-control" name="username"/>
          </div>
          <div class="form-group">
              <label for="password">Password</label>
              <input type="text" class="form-control" name="password"/>
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
		<label for="email">Email</label>
		<input type="text" class="form-control" name="email"/>
	  </div>
	  <div class="form-group">
		<label for="mobil">Mobil</lable>
		<input type="text" class="form-control" name="mobil"/>
	  </div>
      <div class="form-group">
		<label for="admin">admin</lable>
		<input type="text" class="form-control" name="admin"/>
	  </div>
          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="{{ url('usuaris') }}">Accés directe a la Llista d'usuaris</a>
@endsection
