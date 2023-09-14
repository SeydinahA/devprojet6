@extends('stock.app')

@section('content')
    <h1>Liste des produits</h1>
    <a href="{{ route('stocks.create') }}" class="btn btn-primary">Ajouter un produit</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>    
                <th>Description</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stocks as $stock)
                <tr>
                    <td>{{ $stock->nom_produit }}</td>
                    <td>{{ $stock->description_produit }}</td>
                    <td>{{ $stock->prix_produit }}</td>
                    <td>{{ $stock->quantite_produit }}</td>
                    <td>
                        <a href="{{ route('stocks.edit', $stock->id) }}" class="btn btn-warning">Editer</a>
                        <form action="{{ route('stocks.destroy', $stock->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection