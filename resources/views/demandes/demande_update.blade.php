@extends('layouts.app')

@section('content')
    <div class="row">
        <form action="{{ route('demande_update') }}" method="post" class="col-6 offset-3">
            @csrf
            <input type="hidden" name="id" value="{{ $demande->id }}">
            
            <label>Entreprises</label>
            <div class="form-group">
                <select name="entreprise" class="form-control" required="required">
                    
                    @foreach ($entreprises as $entreprise)
                    <option value="{{ $entreprise->id }}">{{ $entreprise->nomEntreprise }}</option>
                    @endforeach
                </select>
            </div>

            <label>Nveau de Formation</label>
             <div class="form-group">
                <input type="text" class="form-control" name="niveauFormation" placeholder="niveau de formation" required="required"
                 value="{{ $demande->niveauFormation }}">
            </div>

            <label>Nombre d'année d'Experience</label>
            <div class="form-group">
                <input type="number" class="form-control" name="nbreAnneeExperience" required="required" placeholder="nombre année experience"
                 value="{{ $demande->nbreAnneeExperience}}">
            </div>

            <label>Durée du Contrat</label>
            <div class="form-group">
                <input type="text" class="form-control" name="dureeContrat" required="required" placeholder="duree du contrat"
                 value="{{ $demande->dureeContrat}}">
            </div>

            <label>Date Limite</label>
            <div class="form-group">
                <input type="date" class="form-control" name="dateLimite" required="required" value="{{ $demande->dateLimite}}" >
            </div>

             <label>Spécialité</label>
           <div class="form-group">
                <select name="specialite" class="form-control" required="required">
                     <option >aucune spécialité selectionnée</option>
                    @foreach ($specialites as $specialite)
                    <option value="{{ $specialite->id }}">{{ $specialite->libelle }}</option>
                    @endforeach
                </select>
            </div>

            <label>Libelle Spécialité choisi</label>
            <div class="form-group">
                <input type="text" class="form-control" name="libelleSpecialite" placeholder="libellé du specialité choisi " 
                value="{{ $specialite->libelleSpecialite}}" required="required">
            </div>


            <div class="form-group">
                <button class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
    </div>
@endsection

    