@extends('layouts.app')

@section('content')
    <div class="row">
        <form action="{{ route('specialite_add') }}" method="post" class="col-6 offset-3">
            @csrf
           
            <label>Libellé</label>
            <div class="form-group">
                <input type="text" class="form-control" name="libelle" placeholder="libelle" required="required">
            </div>

             <label>Description</label>
            <div class="form-group">
                <input type="text" class="form-control" name="description" placeholder="description" required="required">
            </div>

             <label>Domaine</label>
            <div class="form-group">
                <select name="domaine" class="form-control" required="required">
                     <option value="">aucun domaine selectionné</option>
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
