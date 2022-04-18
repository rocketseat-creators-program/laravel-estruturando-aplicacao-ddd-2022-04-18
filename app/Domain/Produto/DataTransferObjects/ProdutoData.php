<?php

namespace App\Domain\Produto\DataTransferObjects;

use App\App\Web\Produto\Requests\ProdutoRequest;
use Spatie\DataTransferObject\DataTransferObject;

class ProdutoData extends DataTransferObject
{
    /** @var string */
    public $nome;

    /** @var string|null */
    public $descricao;

    public static function fromRequest(ProdutoRequest $request): ProdutoData
    {
        return new self([
            'nome' => $request['nome'],
            'descricao' => $request['descricao'],
        ]);
    }
}
