<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Método para criar um novo produto
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'type' => 'required',
            'quantity' => 'required|integer',
            // Adicione as regras de validação para a foto, se necessário
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->type = $request->type;
        $product->quantity = $request->quantity;
        // Salve a foto, se necessário
        $product->save();

        return response()->json(['message' => 'Produto criado com sucesso', 'product' => $product], 201);
    }

    // Método para exibir um produto específico
    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Produto não encontrado'], 404);
        }

        return response()->json(['product' => $product], 200);
    }

    // Método para atualizar um produto existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'type' => 'required',
            'quantity' => 'required|integer',
            // Adicione as regras de validação para a foto, se necessário
        ]);

        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Produto não encontrado'], 404);
        }

        $product->name = $request->name;
        $product->price = $request->price;
        $product->type = $request->type;
        $product->quantity = $request->quantity;
        // Atualize a foto, se necessário
        $product->save();

        return response()->json(['message' => 'Produto atualizado com sucesso', 'product' => $product], 200);
    }

    // Método para deletar um produto existente
    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Produto não encontrado'], 404);
        }

        $product->delete();

        return response()->json(['message' => 'Produto deletado com sucesso'], 200);
    }
}
