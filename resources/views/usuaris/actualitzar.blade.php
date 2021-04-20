@extends('disseny')

@section('content')


<div class="card mt-5">
    <div class="card-header">
        Actualització de dades
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
        <form method="post" action="{{ route('usuaris.update', $usuaris->id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
		<label for="username">Username</label>
		<input type="text" class="form-control" name="username" value="{{ $usuaris->username}}" />
	    </div>
	    <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control" name="password" value="{{ $usuaris->password }}" />
            </div>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" value="{{ $usuaris->nom }}" />
            </div>
            <div class="form-group">
                <label for="cognom">Cognom</label>
                <input type="text" class="form-control" name="cognom" value="{{ $usuaris->cognom }}" />
            </div>
	    <div class="form-group">
		<label for="email">Email</label>
		<input type="text" class="form-control" name="email" value="{{ $usuaris->email }}" />
	    </div>
	    <div class="form-group">
		<label for="mobil">Mobil</label>
		<input type="text" class="form-control" name="mobil" value="{{ $usuaris->mobil }}" />
	    </div>
        <div class="form-group">
		<label for="admin">admin</label>
		<input type="text" class="form-control" name="admin" value="{{ $usuaris->admin }}" />
	    </div>

            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('usuaris') }}">Accés directe a la Llista d'usuaris</a
@endsection
