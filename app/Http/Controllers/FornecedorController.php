<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1', 
                'status' => 'N', 
                'cnpj' => '000,000'
            ],
            1 => [
                'nome' => 'Fornecedor 2', 
                'status' => 'S'
            ]
        ];

        //operador ternario -> condição ? se verdade : se falso
        //operador ternario encadeado -> condição ? se verdade : (condição ? se verdade : se falso)
        $msg = isset($fornecedores[0]['cnpj']) ? 'CNPJ Informado' : 'CNPJ não indformado';
        echo $msg;





        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
