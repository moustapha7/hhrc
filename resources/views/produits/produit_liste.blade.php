@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 text-right">
            <div class="">
                <a class="btn btn-default" href="{{ route('produit_create') }}">Ajouter</a>
            </div>
        </div>
    </div><hr>
    <div class="row">
        <div class="col-12">

            <div class="col-8 offset-2">
                @if (count($produits) > 0)
                    <table class="table table-responsive">
                        <thead>
                        <th>Id</th>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th>quantite</th>
                        <th>Categorie</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        @foreach ($produits as $produit)
                            <tr>
                                <td>{{ $produit->id }}</td>
                                <td>{{ $produit->code }}</td>
                                <td>{{ $produit->name }}</td>
                                <td>{{ $produit->description }}</td>
                                <td>{{ $produit->prix }}</td>
                                <td>{{ $produit->quantite }}</td>
                                <td>{{ App\Produit::find($produit->categorie_id)->categorie->name}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('produit_edit', ['id' => $produit->id ] ) }}">
                                        edit
                                    </a>
                                    <a class="btn btn-danger" href="{{ route('produit_delete', ['id' => $produit->id ] ) }}">
                                        delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="alert alert-danger">
                        <strong>Pas de produits dans la base de données</strong>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
