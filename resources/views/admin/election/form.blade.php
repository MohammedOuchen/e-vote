@extends('admin.layouts.main')

@section('main_title', 'Ajouter une élection')

@section('content')


        <form method="POST" action="{{ route('admin-election.store') }}">
            @csrf

            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">Title :</label>

                <div class="col-md-6">
                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">Type :</label>

                <div class="col-md-6">
                    {{-- <input id="last_name" type="text" class="form-control @error('name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="name" autofocus> --}}

                    <select name="type" class="form-select" aria-label="Default select example" placeholder="Choisissez ...">
                        <option value="MUNICIPAL" selected>Elections municipales</option>
                        <option value="DEPARTMENTAL">Elections départementales</option>
                        <option value="REGIONAL">Elections régionales</option>
                        <option value="LEGISLATIVE">Elections législatives</option>
                    </select>

                    @error('type')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">Date de debut :</label>

                <div class="col-md-6">
                    <input id="startDate" type="date" class="form-control @error('startDate') is-invalid @enderror" name="startDate" value="{{ old('date_of_birth') }}" required autocomplete="name" autofocus>

                    @error('startDate')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>




            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">Date de fin :</label>

                <div class="col-md-6">
                    <input id="endDate" type="date" class="form-control @error('endDate') is-invalid @enderror" name="endDate" value="{{ old('date_of_birth') }}" required autocomplete="name" autofocus>

                    @error('endDate')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

                  <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>


@endsection
