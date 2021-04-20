@extends('disseny')

@section('content')

<h1>Llista de socis</h1>
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td># ID</td>
	  <td>Nif</td>
          <td>Nom</td>
          <td>Cognom</td>
          <td>Adreça</td>
          <td>Poblacio</td>
	  <td>Comarca</td>
	  <td>Fixe</td>
        <td>Mobil</td>
        <td>Email</td>  
        <td>Quota mensual</td>
        <td>Nom de la Ong</td>
          <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($socis as $socis)
        <tr>
            <td>{{$socis->id}}</td>
            <td>{{$socis->nif}}</td>
            <td>{{$socis->nom}}</td>
            <td>{{$socis->cognom}}</td>
            <td>{{$socis->adreca}}</td>
	        <td>{{$socis->poblacio}}</td>
	        <td>{{$socis->comarca}}</td>
	        <td>{{$socis->fixe}}</td>
            <td>{{$socis->mobil}}</td>
            <td>{{$socis->email}}</td>
            <td>{{$socis->mesQuot}}</td>
            <td>{{$socis->nomOng}}</td>
            <td class="text-left">
                <a href="{{ route('socis.edit', $socis->id)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('socis.destroy', $socis->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
<br><a href="{{ url('socis/create') }}">Accés directe a la vista de creació de socis</a>
@endsection
