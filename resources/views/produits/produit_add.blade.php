@extends('layouts.app')

@section('content')
    <div class="row">
        <form action="{{ route('produit_add') }}" method="post" class="col-6 offset-3">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="code" placeholder="code">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="description" placeholder="description">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="quantite" placeholder="quantite">
            </div><div class="form-group">
                <input type="number" class="form-control" name="prix" placeholder="prix">
            </div><div class="form-group">
                <select name="categorie" class="form-control">
                     <option value="">aucun categorie selectionné</option>
                    @foreach ($categories as $categorie)
                    <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Ajouter</button>
            </div>
        </form>
    </div>
@endsection
