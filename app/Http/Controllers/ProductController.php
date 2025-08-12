<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'nullable',
            'preco' => 'required|numeric',
            'imagem' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'estoque' => 'required|integer',
        ]);

        $data = $request->all();

        if ($request->hasFile('imagem')) {
            $path = $request->file('imagem')->store('produtos', 'public');
            $data['imagem'] = $path;
        }

        Product::create($data);

        return redirect()->route('products.index')->with('success', 'Produto adicionado com sucesso!');
    }
}
