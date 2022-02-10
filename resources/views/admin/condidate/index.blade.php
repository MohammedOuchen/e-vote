@extends('admin.layouts.main')

@section('main_title', 'Candidats')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom et Prénom </th>
        <th scope="col">numero carte nationale </th>
        <th scope="col">Active</th>
        <th scope="col">Action</th>
      </tr>
    </thead>

    @foreach ($requests as $request )
            <tbody>
                <tr>
                <th scope="row">{{ $request->id }}</th>
                <td>{{ $request->user->full_name }}</td>
                <td>{{ $request->user->num_carte_national }}</td>
                <td>{{ $request->status }}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <form action="{{route('admin-condidate.store') }}" method="post">
                            @csrf
                            <input type="hidden" name="request_id" value="{{ $request->id }}">
                            <button type="submit" class="btn btn-success">Valider</button>
                        </form>
                        <button type="button" class="btn btn-danger">Annuler</button>
                        <button type="button" class="btn btn-warning">Voir Plus</button>
                      </div>
                </td>
                </tr>
            </tbody>
    @endforeach

  </table>

@endsection
