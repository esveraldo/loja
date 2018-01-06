<?php

namespace loja;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome', 'valor', 'quantidade',
    'descricao', 'tamanho', 'categoria_id'];

    public function categoria()
    {
      return $this->belongsTo('loja\Categoria');
    }
}
