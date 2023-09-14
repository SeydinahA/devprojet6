<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index() 
    {
        $stocks = Stock::all();
        return view('stocks.index', compact('stocks'));
    }
    public function create()
    {
        return view('stocks.create');
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nom_produit' => 'required|string|max:50',
            'quantite_produit' => 'required|integer|min:0',
            'prix_produit' => 'required|numeric|min:0',
            'quantite_produit' => 'required|integer|min:0',
        ]);

        Stock::create($validateData);

        return redirect()->route('stocks.index')->with('succees', 'Produit ajouté avec succès.');
    }
    public function edit($id)
    {
        $stock = Stock::findOrFail($id);
        return view('stocks.edit', compact('stock'));
    }
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'nom_produit' => 'required|string|max:50',
            'quantite_produit' => 'required|string|min:0',
            'prix_produit' => 'required|numeric|min:0',
            'quantite_produit' => 'required|integer|min:0',
        ]);

        $stock = Stock::findOrFail($id);
        $stock-> update($validateData);

        return redirect()-> route('stocks.index')->with('succees', 'Produit mis à jour avec succés.');
    }
    public function destroy($id)
    {
        $stock = Stock::findOrFail($id);
        $stock-> delete();

        return redirect()-> route('stocks.index')->with('succees', 'Produit supprimé avec succès.');
    }
}
