<?php

namespace App\App\Web\Produto\Controllers;

use App\App\Web\Produto\Requests\ProdutoRequest;
use App\Domain\Produto\Actions\CreateProdutoAction;
use App\Domain\Produto\DataTransferObjects\ProdutoData;
use App\Domain\Produto\Models\Produto;
use App\Http\Controllers\Controller;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos = Produto::get();

        return view('web.produto.index', compact('produtos'));
    }

    public function store(ProdutoRequest $request, CreateProdutoAction $action)
    {
        $data = ProdutoData::fromRequest($request);
        $action($data);

        return back()->with(['message' => 'Produto criado com sucesso!']);
    }
}
