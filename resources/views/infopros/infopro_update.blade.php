@extends('layouts.app')

@section('content')
    <div class="row">
        <form action="{{ route('infopro_update') }}" method="post" class="col-6 offset-3">
            @csrf
            
             <input type="hidden" name="id" value="{{ $infopro->id }}">

             <label>Prénom et Nom </label>
            <div class="form-group">
                <select name="candidat" class="form-control" required="required">
                    
                    @foreach ($candidats as $candidat)
                    <option value="{{ $candidat->id }}"> {{ $candidat->prenom}}{{ $candidat->nom}}</option>
                    @endforeach
                </select>
            </div>

            <label>Nveau de Formation</label>
            <div class="form-group">
                <input type="text" class="form-control" name="niveauFormation" required="required" placeholder="niveau de formation"
                value="{{ $infopro->niveauFormation }}">
            </div>

            <label>Nombre d'année d'Experience</label>
            <div class="form-group">
                <input type="number" class="form-control" name="nbreAnneeExperience" required="required" placeholder="nombre année experience"
                value="{{ $infopro->nbreAnneeExperience }}">
            </div>

            <label>Motivation</label>
            <div class="form-group">
                <input type="textarea" class="form-control" name="lettreMotive" required="required" placeholder="texte de motivation"
                value="{{ $infopro->lettreMotive }}">
            </div>

             <label>Disponibilité</label>
            <div class="form-group">
                <input type="text" class="form-control" name="disponibilite" required="required" value="{{ $infopro->disponibilite }}" >
            </div>

            <label>CV</label>
            <div class="form-group">
                <input type="file" class="form-control" name="cv" required="required" value="{{ $infopro->cv }}">
            </div>


             <label>Spécialité</label>
            <div class="form-group">
                <select name="specialite" class="form-control" required="required">
                    
                    @foreach ($specialites as $specialite)
                    <option value="{{ $specialite->id }}">{{ $specialite->libelle }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <button class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
    </div>
@endsection
