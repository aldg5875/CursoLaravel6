<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaterialController extends Controller
{
   
   protected $request;
   
   public function __construct(Request $request)
   {
      // dd($request);
       $this->request = $request;
       //$this->middleware('auth'); //isso é geral
      // $this->middleware('auth')->only('create'); // em um metodo especifico.
      //$this->middleware('auth')->only(['create','store']); // em mais de um metodo especifico.
      //$this->middleware('auth')->except(['index']); // exceto....
      $this->middleware('auth')->except(['index', 'show']); // exceto....

   }
  
   
     
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return "Listagem dos Produtos"; //
      //  $teste = 123;
       //return view('site.teste', ['teste'=>$teste]);// para uma variavel
       //return view('site.teste', compact('teste'));// para mais de uma variavel

     //  $teste = '<h1>OlÁ!</h1>'; //htmlspecialchars
     //  return view('site.teste', compact('teste'));//segurança contra xss

     //$teste = '<script> alert("OlÁ")</script>'; //htmlspecialchars  /////////perguntar para o cristiano
     //return view('site.teste', compact('teste'));

     //$teste = '<h1>OlÁ!</h1>'; //htmlspecialchars
     //return view('admin.pages.products.index', compact('teste'));

     $teste = 123; //htmlspecialchars
     $teste2 = 321;
     $teste3 = [1,2,3,4,5];
     $products = ['TV', 'Geladeira', 'Forno', 'Sofá'] ;  

     //$products = [] ;  

     return view('admin.pages.products.index', compact('teste','teste2', 'teste3', 'products'));

    }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "Listagem dos Produtos2"; ////
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "Exibindo o produto de id: {$id}";//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
