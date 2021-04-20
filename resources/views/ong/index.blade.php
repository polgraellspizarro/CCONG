@extends('disseny')

@section('content')

<h1>Llista d'empleats</h1>
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
	  <td>Cif</td>
          <td>Nom</td>
          <td>Adreça</td>
          <td>Poblacio</td>
	  <td>Comarca</td>
	  <td>Tipus</td>
          <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($ong as $ongs)
        <tr>
            <td>{{$ongs->id}}</td>
            <td>{{$ongs->cif}}</td>
            <td>{{$ongs->nom}}</td>
            <td>{{$ongs->adreca}}</td>
	    <td>{{$ongs->poblacio}}</td>
	    <td>{{$ongs->comarca}}</td>
	    <td>{{$ongs->tipus}}</td>
            <td class="text-left">
                <a href="{{ route('ong.edit', $ongs->id)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('ong.destroy', $ongs->id)}}" method="post" style="display: inline-block">
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
<br><a href="{{ url('ong/create') }}">Accés directe a la vista de creació de ongs</a>
@endsection
