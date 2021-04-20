@extends('disseny')

@section('content')

<h1>Llista de Professionals</h1>
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
        <td>Carrec</td>
        <td>Pagament</td>
        <td>IRPF</td>
        <td>Nom De la Ong</td>
          <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($professionals as $professionals)
        <tr>
            <td>{{$professionals->id}}</td>
            <td>{{$professionals->nif}}</td>
            <td>{{$professionals->nom}}</td>
            <td>{{$professionals->cognom}}</td>
	    <td>{{$professionals->adreca}}</td>
	    <td>{{$professionals->poblacio}}</td>
	    <td>{{$professionals->comarca}}</td>
        <td>{{$professionals->fixe}}</td>
        <td>{{$professionals->mobil}}</td>
        <td>{{$professionals->email}}</td>
        <td>{{$professionals->carrec}}</td>
        <td>{{$professionals->pagament}}</td>
        <td>{{$professionals->IRPF}}</td>
        <td>{{$professionals->nomOng}}</td>
            <td class="text-left">
                <a href="{{ route('professionals.edit', $professionals->id)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('professionals.destroy', $professionals->id)}}" method="post" style="display: inline-block">
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
<br><a href="{{ url('professionals/create') }}">Accés directe a la vista de Professionals</a>
@endsection
