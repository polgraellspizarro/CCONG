@extends('disseny')

@section('content')

<h1>Llista de voluntaris</h1>
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
          <td>Adreca</td>
	  <td>Poblacio</td>
	  <td>Comarca</td>
        <td>Fixe</td>
        <td>Mobil</td>
        <td>Email</td>
        <td>Edad</td>
        <td>Professio</td>
        <td>Hores dedicades</td>
        <td>Nom De la Ong</td>
          <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($voluntaris as $voluntaris)
        <tr>
            <td>{{$voluntaris->id}}</td>
            <td>{{$voluntaris->nif}}</td>
            <td>{{$voluntaris->nom}}</td>
            <td>{{$voluntaris->cognom}}</td>
	    <td>{{$voluntaris->adreca}}</td>
	    <td>{{$voluntaris->poblacio}}</td>
	    <td>{{$voluntaris->comarca}}</td>
        <td>{{$voluntaris->fixe}}</td>
        <td>{{$voluntaris->mobil}}</td>
        <td>{{$voluntaris->email}}</td>
        <td>{{$voluntaris->edad}}</td>
        <td>{{$voluntaris->professio}}</td>
        <td>{{$voluntaris->hDedicades}}</td>
        <td>{{$voluntaris->nomOng}}</td>
            <td class="text-left">
                <a href="{{ route('voluntaris.edit', $voluntaris->id)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('voluntaris.destroy', $voluntaris->id)}}" method="post" style="display: inline-block">
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
<br><a href="{{ url('voluntaris/create') }}">Accés directe a la vista de Voluntaris</a>
@endsection
