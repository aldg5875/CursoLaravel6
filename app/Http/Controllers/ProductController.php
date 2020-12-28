<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProductRequest;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.products.create');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUpdateProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateProductRequest $request)
    {
       /*
        $request->validate([
            'name'=> 'required|min:3|max:255',
            'description' => 'nullable|min:3|max:10000',
            'photo' => 'required|image',
        ]);
        */
        dd('ok!');// - quando tem dd para o processamento aqui

        //dd('Cadastrando....só que no');//
        //dd($request->all());
        //dd($request->only(['name','description']));
        //dd($request->name);
        //dd($request->has('teste')); verifica se existe
        //dd($request->input('name', 'default'));//campo não existe traz o campo default
        //dd($request->except('name'));
        //dd($request->file('photo'));
        //dd($request->file('photo')->isValid());// verifica se é valido
        if ($request->file('photo')->isValid()) { 
            // dd($request->photo->extension()); pega extensão do arquivo
            //dd($request->photo->getClientOriginalName());// pega nome do arquivo // não recomendado pois pode sobrescrever arquivo se existir
            //dd($request->file('photo')->store('products'));pega o arquivo e salva no paht padrão config - file
            // personalizar o nome do arquivo quando for salvar:
            $nameFile = $request->name . '.' . $request->photo->extension();
            dd($request->file('photo')->storeAs('products', $nameFile));    
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //dd("Editando o produto {$id}");//
        return view('admin.pages.products.edit', compact('id'));//
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
         dd($request->all());
        // dd("Editando o produto {$id}");//
        // dd($request->name);
        //dd($request->has('teste'));
        //dd($request->input('name', 'default'));//campo não existe
      //  dd($request->only(['name','description']));
     // dd($request->except('name'));
        

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
