<?php

namespace loja\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use loja\Produto;
use loja\Categoria;
use loja\Http\Requests\ProdutoRequest;

class ProdutoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => array('list', 'index')]);
    }

    public function index()
    {
      return redirect()->action('ProdutoController@list');
    }

    public function list()
    {
      if(\Auth::check()){
        $user = \Auth::user();
      }else{
        $user = ['name' => 'Visitante'];
        $user = (Object) $user;
      }

      $produtos = Produto::all();
      return view('produtos.list', ['produtos' => $produtos, 'user' => $user]);
    }

    public function show($id)
    {
      $produto = Produto::find($id);
      return view('produtos.details', ['produto' => $produto]);
    }

    public function new()
    {
      return view('produtos.new')->with('categorias', Categoria::all());
    }

    public function create(ProdutoRequest $request)
    {
      $produto = Produto::create($request->all());
      return redirect('produtos/list')->withInput();
    }

    public function destroy($id)
    {
      $produto = Produto::find($id);
      $produto->delete();

      return redirect('produtos/list');
    }
}
