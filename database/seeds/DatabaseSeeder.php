<?php

use Illuminate\Database\Seeder;
use loja\Produto;
use loja\Categoria;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //$this->call(ProdutosTableSeeder::class);
        $this->call(CategoriaTableSeeder::class);
    }
}

// class ProdutosTableSeeder extends Seeder
// {
//   public function run()
//   {
//     Produto::create(['nome' => 'Liquidificador', 'valor' => '135,80' , 'quantidade' => '5',
//                     'descricao' => 'Alta performance', 'tamanho' => '60cm x 40cm']);
//   }
// }

class CategoriaTableSeeder extends DatabaseSeeder
{
  public function run()
  {
    Categoria::create(['nome' => 'Sem categoria']);
    Categoria::create(['nome' => 'Eletrônicos']);
    Categoria::create(['nome' => 'Eletrodomésticos']);
    Categoria::create(['nome' => 'Brinquedos']);
    Categoria::create(['nome' => 'Esportes']);
  }
}
