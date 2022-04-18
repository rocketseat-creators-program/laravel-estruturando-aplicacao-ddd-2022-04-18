<?php

namespace App\Domain\Produto\Actions;

use App\Domain\Produto\DataTransferObjects\ProdutoData;
use App\Domain\Produto\Models\Produto;

final class CreateProdutoAction
{
    public function __invoke(ProdutoData $produtoData): Produto
    {
        return Produto::create([
            'nome' => $produtoData->nome,
            'descricao' => $produtoData->descricao,
        ]);
    }
}
