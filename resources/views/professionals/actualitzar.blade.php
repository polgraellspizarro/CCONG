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
        <form method="post" action="{{ route('professionals.update', $professionals->id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
		<label for="nif">Nif</label>
		<input type="text" class="form-control" name="nif" value="{{ $professionals->nif}}" />
	    </div>
	    <div>
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" value="{{ $professionals->nom }}" />
            </div>
            <div class="form-group">
                <label for="cognom">Cognom</label>
                <input type="text" class="form-control" name="cognom" value="{{ $professionals->cognom }}" />
            </div>
            <div class="form-group">
                <label for="adreca">Adreça</label>
                <input type="text" class="form-control" name="adreca" value="{{ $professionals->adreca }}" />
            </div>
	    <div class="form-group">
		<label for="poblacio">Poblacio</label>
		<input type="text" class="form-control" name="poblacio" value="{{ $professionals->poblacio }}" />
	    </div>
	    <div class="form-group">
		<label for="comarca">Comarca</label>
		<input type="text" class="form-control" name="comarca" value="{{ $professionals->comarca }}" />
	    </div>
        <div class="form-group">
		<label for="fixe">Telefon Fixe</label>
		<input type="text" class="form-control" name="fixe" value="{{ $professionals->fixe }}" />
	    </div>
        <div class="form-group">
		<label for="mobil">telefon Mobil</label>
		<input type="text" class="form-control" name="mobil" value="{{ $professionals->mobil }}" />
	    </div>
        <div class="form-group">
		<label for="email">Email</label>
		<input type="text" class="form-control" name="email" value="{{ $professionals->email }}" />
	    </div>
        <div class="form-group">
		<label for="carrec">Carrec</label>
		<input type="text" class="form-control" name="carrec" value="{{ $professionals->carrec }}" />
	    </div>
        <div class="form-group">
		<label for="pagament">Pagament</label>
		<input type="text" class="form-control" name="pagament" value="{{ $professionals->pagament }}" />
	    </div>
        <div class="form-group">
		<label for="IRPF">IRPF</label>
		<input type="text" class="form-control" name="IRPF" value="{{ $professionals->IRPF }}" />
	    </div>
        <div class="form-group">
		<label for="nomOng">Nom de la Ong</label>
		<input type="text" class="form-control" name="nomOng" value="{{ $professionals->nomOng }}" />
	    </div>

            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('professionals') }}">Accés directe a la Llista de Voluntaris</a
@endsection
