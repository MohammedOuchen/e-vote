@extends('admin.layouts.main')

@section('main_title', 'Candidats')

@section('content')

<a href="{{ route('admin-election.create') }}" class="btn btn-success m-2">Ajouter une élection</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">title</th>
        <th scope="col">Type</th>
        <th scope="col">Date de debut</th>
        <th scope="col">date fin</th>
        <th scope="col">active</th>
        <th scope="col">action</th>
      </tr>
    </thead>

    @foreach ($elections as $election )
            <tbody>
                <tr>
                <th scope="row">{{ $election->id }}</th>
                <td>{{ $election->title }}</td>
                <td>{{ $election->type }}</td>
                <td>{{ $election->startDate }}</td>
                <td>{{ $election->endDate }}</td>
                <td>
                    @if ($election->active)
                    <img src="https://img.icons8.com/color/48/000000/checkmark--v2.png"/>
                    @else
                    <img src="https://img.icons8.com/fluency/48/000000/not-applicable.png"/>
                    @endif
                </td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <button type="button" class="btn btn-danger">Supprimer</button>
                        <button type="button" class="btn btn-warning">Voir Plus</button>
                        <button type="button" class="btn btn-success">Valider</button>
                      </div>
                </td>
                </tr>
            </tbody>
    @endforeach

  </table>

@endsection
