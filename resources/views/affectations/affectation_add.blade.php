@extends('layouts.app')

@section('content')
    <div class="row">
        <form action="{{ route('affectation_add') }}" method="post" class="col-6 offset-3">
            @csrf
            
             <label>Candidats</label>
            <div class="form-group">
                <select name="candidat" class="form-control">
                     <option value="null">aucun candidat selectionné</option>
                    @foreach ($candidats as $candidat)
                    <option value="{{ $candidat->id }}">{{ $candidat->nom }} {{ $candidat->prenom }} </option>
                    @endforeach
                </select>
            </div>

             <label>Demandes</label>
            <div class="form-group">
                <select name="demande" class="form-control">
                     <option >aucune demande selectionnée</option>
                    @foreach ($demandes as $demande)
                    <option value="{{ $demande->id }}">{{$demande->libelleSpecialite }}</option>
                    @endforeach
                </select>
            </div>

             <label>Date Affectation</label>
            <div class="form-group">
                <input type="date" class="form-control" name="dateAffectation" >
            </div>

            <label>Libellé</label>
            <div class="form-group">
                <input type="text" class="form-control" name="libelle" placeholder="libelle">
            </div>

            
            

            <div class="form-group">
                <button class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
    </div>
@endsection
