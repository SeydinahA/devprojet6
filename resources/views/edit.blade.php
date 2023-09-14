@extends('stock.app')

@section('content')
    <h1>Editer un produit</h1>
    <form action="{{ route('stock.update', $stock->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nom_produit">Nom du produit</label>
            <input type="text" class="form-control" id="nom_produit" name="nom_produit" value="{{ $stock->nom_produit }}" required>
        </div>
        <div class="form-group">
            <label for="description_produit">Description</label>
            <textarea class="form-control" id="description_produit" name="description_produit">{{ $stock->description_produit }}</textarea>
        </div>
        <div class="form-group">
            <label for="prix_produit">Prix</label>
            <input type="number" step="0.01" class="form-control" id="prix_produit" name="prix_produit" value="{{ $stock->prix_produit }}" required>
        </div>
        <div class="form-group">
            <label for="quantite_produit">Quantité</label>
            <input type="number" class="form-control" id="quantite_produit" name="quantite_produit" value="{{ $stock->quantite_produit }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
@endsection