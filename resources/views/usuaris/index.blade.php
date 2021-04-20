@extends('disseny')

@section('content')

<h1>Llista d'usuaris</h1>
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
	      <td>Username</td>
          <td>Password</td>
          <td>Nom</td>
          <td>Cognom</td>
	      <td>Email</td>
	      <td>Mobil</td>
          <td>admin</td>
          <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($usuaris as $usuaris)
        <tr>
            <td>{{$usuaris->id}}</td>
            <td>{{$usuaris->username}}</td>
            <td>{{$usuaris->password}}</td>
            <td>{{$usuaris->nom}}</td>
	        <td>{{$usuaris->cognom}}</td>
	        <td>{{$usuaris->email}}</td>
            <td>{{$usuaris->mobil}}</td>
	        <td>{{$usuaris->admin}}</td>
            <td class="text-left">
                <a href="{{ route('usuaris.edit', $usuaris->id)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('usuaris.destroy', $usuaris->id)}}" method="post" style="display: inline-block">
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
<br><a href="{{ url('usuaris/create') }}">Accés directe a la vista de creació d'usuaris</a>
@endsection
