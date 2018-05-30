<?php
namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Produto;
use Request;

class ProdutoController extends Controller {

    public function lista(){
        //return '<h1>Listagem de produtos com Laravel</h1>';

        $produtos = DB::select('select * from produtos');

        return view('produtos-listagem')->with('produtos', $produtos);
    }

    public function mostra($id){
      $id = Request::route('id'); // precisamos pegar o id de alguma forma
      $resposta = DB::select('select * from produtos where id = ?', [$id]);
      if(empty($resposta)) {
        return "Esse produto não existe";
      }
      return view('detalhes')->with('p', $resposta[0]);
      }
}
