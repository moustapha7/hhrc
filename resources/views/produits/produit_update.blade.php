@extends('layouts.app')

@section('content')
    <div class="row">
        <form action="{{ route('produit_update') }}" method="post" class="col-6 offset-3">
            @csrf
            <input type="hidden" name="id" value="{{ $produit->id }}">
            <div class="form-group">
                <input type="text" class="form-control" name="code" placeholder="code" value="{{ $produit->code }}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="name" value="{{ $produit->name }}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="description"
                       placeholder="description" value="{{ $produit->description }}">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="quantite" placeholder="quantite"
                       value="{{ $produit->quantite }}">
            </div><div class="form-group">
                <input type="number" class="form-control" name="prix" placeholder="prix"
                       value="{{ $produit->prix }}">
            </div>
            <div class="form-group">
                <select name="categorie" class="form-control">
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