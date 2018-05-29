<?php
namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Produto;

class ProdutoController extends Controller {

    public function lista(){
        //return '<h1>Listagem de produtos com Laravel</h1>';

        $produtos = DB::select('select * from produtos');

        return view('produtos-listagem')->with('produtos', $produtos);
    }
}