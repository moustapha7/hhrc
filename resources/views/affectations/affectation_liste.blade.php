@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 text-right">
            <div class="">
                <a class="btn btn-default" href="{{ route('affectation_create') }}">Ajouter</a>
            </div>
        </div>
    </div><hr>
    <div class="row">
        <div class="col-12">

            <div class="col-8 offset-2">
                
                @if (count($affectations) > 0)
                    <table class="table table-responsive">
                        <thead>
                            <th with="80px">No</th>
                            <th>Candidats</th>
                            <th>Demandes</th>
                            <th>Date Affecation</th>
                            <th>libellé</th>
   
                            <th>Action</th>
                        </thead>
                        <tbody>

                        @foreach ($affectations as $affectation)
                            <tr>
                                <td>{{ $affectation->id }}</td>
                                <td>{{ App\Affectation::find($affectation->candidats_id)->candidat->nom }}</td>
                                <td>{{ $affectation->demandes_id }}</td>


                              <!--  <td>{{ App\Affectation::find($affectation->demandes_id)->demande->libelleSpecialite}}</td> -->
                                <td>{{ $affectation->dateAffectation }}</td>
                                <td>{{ $affectation->libelle }}</td>
                                
                               
                                <td>
                                    <a class="btn btn-primary" href="{{ route('affectation_edit', ['id' => $affectation->id ] ) }}">
                                        edit
                                    </a>
                                    <a class="btn btn-danger" href="{{ route('affectation_delete', ['id' => $affectation->id ] ) }}">
                                        delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="alert alert-danger">
                        <strong>Pas d'Affectation' dans la base de données</strong>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
