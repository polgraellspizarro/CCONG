@extends('disseny')

@section('content')


<div class="card mt-5">
    <div class="card-header">
        Actualització de dades dels socis
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
        <form method="post" action="{{ route('socis.update', $socis->id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
		<label for="nif">Nif</label>
		<input type="text" class="form-control" name="nif" value="{{ $socis->nif}}" />
	    </div>
	    <div>
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" value="{{ $socis->nom }}" />
            </div>
            <div class="form-group">
                <label for="cognom">Cognom</label>
                <input type="text" class="form-control" name="cognom" value="{{ $socis->cognom }}" />
            </div>
            <div class="form-group">
                <label for="adreca">Adreça</label>
                <input type="text" class="form-control" name="adreca" value="{{ $socis->adreca }}" />
            </div>
	    <div class="form-group">
		<label for="poblacio">Poblacio</label>
		<input type="text" class="form-control" name="poblacio" value="{{ $socis->poblacio }}" />
	    </div>
	    <div class="form-group">
		<label for="comarca">Comarca</label>
		<input type="text" class="form-control" name="comarca" value="{{ $socis->comarca }}" />
	    </div>
<div class="form-group">
		<label for="fixe">Telefon Fixe</label>
		<input type="text" class="form-control" name="fixe" value="{{ $socis->fixe }}" />
	    </div>
<div class="form-group">
		<label for="mobil">Telefon Mobil</label>
		<input type="text" class="form-control" name="mobil" value="{{ $socis->mobil }}" />
	    </div>
<div class="form-group">
		<label for="email">Email</label>
		<input type="text" class="form-control" name="email" value="{{ $socis->email }}" />
	    </div>
<div class="form-group">
		<label for="mesQuot">Quota mensual</label>
		<input type="text" class="form-control" name="mesQuot" value="{{ $socis->mesQuot }}" />
	    </div>
<div class="form-group">
		<label for="nomOng">Nom de la Ong</label>
		<input type="text" class="form-control" name="nomOng" value="{{ $socis->nomOng }}" />
	    </div>


            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('socis') }}">Accés directe a la Llista de socis</a
@endsection
