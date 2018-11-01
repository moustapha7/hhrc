@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 text-right">
            <div class="">
                <a class="btn btn-default" href="{{ route('infopro_create') }}">Ajouter</a>
            </div>
        </div>
    </div><hr>
    <div class="row">
        <div class="col-12">

            <div class="col-8 offset-2">
                
                @if (count($infopros) > 0)
                    <table class="table table-responsive">
                        <thead>
                            <th with="80px">No</th>
                            <th>Candidats</th>
                            <th>Niveau Formation</th>
                            <th>Nombre d'Année d'experience</th>
                            <th>Motivation</th>
                            <th>Disponibilité</th>
                            <th>CV</th>
                            <th>Specialités </th>
   
                            <th>Action</th>
                        </thead>
                        <tbody>

                        @foreach ($infopros as $infopro)
                            <tr>
                                <td>{{ $infopro->id }}</td>
                                <td>{{ App\Infopro::find($infopro->candidats_id)->candidat->nom}}</td>
                                <td>{{ $infopro->niveauFormation }}</td>
                                <td>{{ $infopro->nbreAnneeExperience }}</td>
                                 <td>{{ $infopro->lettreMotive}}</td>
                                 <td>{{ $infopro->disponibilite}}</td> 
                                 <td>{{ $infopro->cv}}</td> 
                                <td>{{ App\InfoPro::find($infopro->specialites_id)->specialite->libelle}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('infopro_edit', ['id' => $infopro->id ] ) }}">
                                        edit
                                    </a>
                                    <a class="btn btn-danger" href="{{ route('infopro_delete', ['id' => $infopro->id ] ) }}">
                                        delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="alert alert-danger">
                        <strong>Pas de demandes dans la base de données</strong>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
