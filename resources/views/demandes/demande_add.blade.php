@extends('layouts.app')

@section('content')
    <div class="row">
        <form action="{{ route('demande_add') }}" method="post" class="col-6 offset-3">
            @csrf
            
             <label>Entreprises</label>
            <div class="form-group">
                <select name="entreprise" class="form-control" required="required">
                     <option >aucune entreprise selectionnée</option>
                    @foreach ($entreprises as $entreprise)
                    <option value="{{ $entreprise->id }}">{{ $entreprise->nomEntreprise }}</option>
                    @endforeach
                </select>
            </div>

            <label>Nveau de Formation</label>
            <div class="form-group">
                <input type="text" class="form-control" required="required" name="niveauFormation" placeholder="niveau de formation">
            </div>

            <label>Nombre d'année d'Experience</label>
            <div class="form-group">
                <input type="number" class="form-control" required="required" name="nbreAnneeExperience" placeholder="nombre année experience" required="required">
            </div>

            <label>Durée du Contrat</label>
            <div class="form-group">
                <input type="text" class="form-control" required="required" name="dureeContrat" placeholder="duree du contrat">
            </div>

             <label>Date Limite</label>
            <div class="form-group">
                <input type="date" class="form-control" required="required" name="dateLimite" >
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

            <label>Libelle de la Spécialité choisi</label>
            <div class="form-group">
                <input type="text" class="form-control" name="libelleSpecialite" placeholder="saisir le libellé de la specialité choisi " required="required" >
            </div>

            <div class="form-group">
                <button class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
    </div>
@endsection
