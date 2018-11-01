@extends('layouts.app')

@section('content')
    <div class="row">
        <form action="{{ route('affectation_update') }}" method="post" class="col-6 offset-3">
            @csrf
            
             <input type="hidden" name="id" value="{{ $affectation->id }}" required="required">

             <label>Candidats</label>
            <div class="form-group">
                <select name="candidat" class="form-control" required="required">
                     <option>Aucun candidat séléctionné</option>
                    @foreach ($candidats as $candidat)
                    <option value="{{ $candidat->id }}">{{ $candidat->nom }} {{ $candidat->prenom }} </option>
                    @endforeach
                </select>
            </div>

             <label>Demandes</label>
            <div class="form-group">
                <select name="demande" class="form-control" required="required">
                     <option>aucune demande selectionnée</option>
                    @foreach ($demandes as $demande)
                    <option value="{{ $demande->id }}">{{ $demande->libelleSpecialite}}</option>
                    @endforeach
                </select>
            </div>

             <label>Date Affectation</label>
            <div class="form-group">
                <input type="date" class="form-control" name="dateAffectation" required="required"
                value="{{ $affectation->dateAffectation }}">
            </div>

            <label>Libellé</label>
            <div class="form-group">
                <input type="text" class="form-control" name="libelle" placeholder="libelle" required="required"
                value="{{ $affectation->libelle }}">
            </div>

            
            

            <div class="form-group">
                <button class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
    </div>
@endsection
