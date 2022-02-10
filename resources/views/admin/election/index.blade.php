@extends('admin.layouts.main')

@section('main_title', 'Candidats')

@section('content')

<a href="{{ route('admin-election.create') }}" class="btn btn-success m-2">Ajouter une élection</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom et Prénom </th>
        <th scope="col">numero carte nationale </th>
        <th scope="col">Action</th>
      </tr>
    </thead>

    {{-- @foreach ($requests as $request )
            <tbody>
                <tr>
                <th scope="row">{{ $request->id }}</th>
                <td>{{ $request->user->full_name }}</td>
                <td>{{ $request->user->num_carte_national }}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <button type="button" class="btn btn-danger">Supprimer</button>
                        <button type="button" class="btn btn-warning">Voir Plus</button>
                        <button type="button" class="btn btn-success">Valider</button>
                      </div>
                </td>
                </tr>
            </tbody>
    @endforeach --}}

  </table>

@endsection
