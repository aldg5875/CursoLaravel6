<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    //
    public function index0()
    {

       return 'Listagem dos Produtos';

    }

    public function index()
    {
        $produtos = ['produto 01, produto 02, produto 03'];
        return $produtos;
    }

    public function show($id)
    {
        
        return "Exibindo o produto de id: {$id}";
    }

    public function create()
    {
       return "Exibindo o form de cadastro de um novo produto"; 
    }

    public function edit($id)
    {
       return "Exibindo o form de edição do cadastro de um novo produto: {$id}"; 
    }

    public function store()
    {
       return "Cadastro de um produto"; 
    }

    public function update($id)
    {
       return "editando de um produto: {$id}"; 
    }

    public function destroe($id)
    {
       return "deletando de um produto: {$id}"; 
    }

}
