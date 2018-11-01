@extends('layouts.app')

@section('content')
    <div class="row">
        <form action="{{ route('specialite_update') }}" method="post" class="col-6 offset-3">
            @csrf
            <input type="hidden" name="id" value="{{ $specialite->id }}" required="required">
            
             <label>Libellé</label>
            <div class="form-group">
                <input type="text" class="form-control" name="libelle"
                       placeholder="libelle" value="{{ $specialite->libelle }}" required="required">
            </div>

            <label>Description</label>
            <div class="form-group">
                <input type="text" class="form-control" name="description"
                       placeholder="description" value="{{ $specialite->description }}" required="required">
            </div>

            <label>Domaine</label>
            <div class="form-group">
                <select name="domaine" class="form-control" required="required">
                     
                    @foreach ($domaines as $domaine)
                    <option value="{{ $domaine->id }}">{{ $domaine->libelle }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <button class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
    </div>
@endsection

    