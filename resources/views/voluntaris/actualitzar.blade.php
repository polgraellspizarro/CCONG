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
        <form method="post" action="{{ route('voluntaris.update', $voluntaris->id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
		<label for="nif">Nif</label>
		<input type="text" class="form-control" name="nif" value="{{ $voluntaris->nif}}" />
	    </div>
	    <div>
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" value="{{ $voluntaris->nom }}" />
            </div>
            <div class="form-group">
                <label for="cognom">Cognom</label>
                <input type="text" class="form-control" name="cognom" value="{{ $voluntaris->cognom }}" />
            </div>
            <div class="form-group">
                <label for="adreca">Adreça</label>
                <input type="text" class="form-control" name="adreca" value="{{ $voluntaris->adreca }}" />
            </div>
	    <div class="form-group">
		<label for="poblacio">Poblacio</label>
		<input type="text" class="form-control" name="poblacio" value="{{ $voluntaris->poblacio }}" />
	    </div>
	    <div class="form-group">
		<label for="comarca">Comarca</label>
		<input type="text" class="form-control" name="comarca" value="{{ $voluntaris->comarca }}" />
	    </div>
        <div class="form-group">
		<label for="fixe">Telefon Fixe</label>
		<input type="text" class="form-control" name="fixe" value="{{ $voluntaris->fixe }}" />
	    </div>
        <div class="form-group">
		<label for="mobil">telefon Mobil</label>
		<input type="text" class="form-control" name="mobil" value="{{ $voluntaris->mobil }}" />
	    </div>
        <div class="form-group">
		<label for="email">Email</label>
		<input type="text" class="form-control" name="email" value="{{ $voluntaris->email }}" />
	    </div>
        <div class="form-group">
		<label for="edad">Edad</label>
		<input type="text" class="form-control" name="edad" value="{{ $voluntaris->edad }}" />
	    </div>
        <div class="form-group">
		<label for="professio">Professio</label>
		<input type="text" class="form-control" name="professio" value="{{ $voluntaris->professio }}" />
	    </div>
        <div class="form-group">
		<label for="hDedicades">Hores dedicades</label>
		<input type="text" class="form-control" name="hDedicades" value="{{ $voluntaris->hDedicades }}" />
	    </div>
        <div class="form-group">
		<label for="nomOng">Nom de la Ong</label>
		<input type="text" class="form-control" name="nomOng" value="{{ $voluntaris->nomOng }}" />
	    </div>

            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('voluntaris') }}">Accés directe a la Llista de Voluntaris</a
@endsection
