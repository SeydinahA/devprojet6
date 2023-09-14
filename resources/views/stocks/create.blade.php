@extends('stock.app')

@section('content')
    <h1>Ajouter un produit</h1>
    <form action="{{ route('stocks.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nom_produit">Nom du produit</label>
            <input type="text" class="form-control" id="nom_produit" name="nom_produit" required>
        </div>
        <div class="form-group">
            <label for="description_produit">Description</label>
            <textarea class="form-control" id="description_produit" name="description_produit"></textarea>
        </div>
        <div class="form-group">
            <label for="prix_produit">Prix</label>
            <input type="number" step="0.01" class="form-control" id="prix_produit" name="prix_produit" required>
        </div>
        <div class="form-group">
            <label for="quantite_produit">Quantité</label>
            <input type="number" class="form-control" id="quantite_produit" name="quantite_produit" required>
        </div>
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
@endsection