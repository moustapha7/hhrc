@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 text-right">
            <div class="">
                <a class="btn btn-default" href="{{ route('specialite_create') }}">Ajouter</a>
            </div>
        </div>
    </div><hr>
    <div class="row">
        <div class="col-12">

            <div class="col-8 offset-2">
                @if (count($specialites) > 0)
                    <table class="table table-responsive">
                        <thead>
                            <th>Id</th>
                            <th>Libelle</th>
                            <th>Description</th>
                            <th>Domaine</th>
                            
                            <th>Action</th>
                        </thead>
                        <tbody>

                        @foreach ($specialites as $specialite)
                            <tr>
                                <td>{{ $specialite->id }}</td>
                                <td>{{ $specialite->libelle }}</td>
                                <td>{{ $specialite->description }}</td>

                               <td>{{ App\Specialite::find($specialite->domaines_id)->domaine->libelle}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('specialite_edit', ['id' => $specialite->id ] ) }}">
                                        edit
                                    </a>
                                    <a class="btn btn-danger" href="{{ route('specialite_delete', ['id' => $specialite->id ] ) }}">
                                        delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="alert alert-danger">
                        <strong>Pas de specialites dans la base de données</strong>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
