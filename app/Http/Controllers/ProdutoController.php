<?php
namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Produto;
use Request;

class ProdutoController extends Controller {

    public function lista(){
        //return '<h1>Listagem de produtos com Laravel</h1>';

        $produtos = DB::select('select * from produtos');

        return view('produto.listagem')->with('produtos', $produtos);
    }

    public function mostra($id){
      $id = Request::route('id'); // precisamos pegar o id de alguma forma
      $resposta = DB::select('select * from produtos where id = ?', [$id]);
      if(empty($resposta)) {
        return "Esse produto não existe";
      }
      return view('produto.detalhes')->with('p', $resposta[0]);
      }

    public function novo(){
      return view('produto.formulario');
    }

    public function adiciona(){
      $nome = Request::input('nome');
      $descricao = Request::input('descricao');
      $valor = Request::input('valor');
      $quantidade = Request::input('quantidade');
      
      return implode(', ', array($nome,
        $descricao, $valor, $quantidade));
    }
}
