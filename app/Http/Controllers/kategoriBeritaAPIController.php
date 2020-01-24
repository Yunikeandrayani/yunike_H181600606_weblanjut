<?php

namespace App\Http\Controllers;


use App\KategoriBerita;
use Illuminate\Http\Request;

class kategoriArtikelAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $kategoriBeritas=KategoriBerita::all();

        return $kategoriBeritas;

    }

  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $input=$request->all();

        $kategoriBerita=kategoriBerita::create($input);


        return $kategoriBerita;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $kategoriBerita=kategoriBerita::find($id);

        return $kategoriBerita;

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
        $input=$request->all();

        $kategoriBerita=kategoriBerita::find($id);
        
        if(empty($kategoriberita)){
                 return response()->json(['message'=>'data tidak ditemukan'], 404);
        }

        $kategoriberita->update($input);

        return response()->json($kategoriberita);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $kategoriberita=kategoriBerita::find($id);
        
        if(empty($kategoriberita)){
                 return response()->json(['message'=>'data tidak ditemukan'], 404);
        }

        $kategoriberita->update($input);

        return response()->json($kategoriberita);
    
    }
}
