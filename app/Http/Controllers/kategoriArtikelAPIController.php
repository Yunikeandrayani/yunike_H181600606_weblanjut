<?php

namespace App\Http\Controllers;


use App\KategoriArtikel;
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
    
        $kategoriArtikels=KategoriArtikel::all();

        return $kategoriArtikels;

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

        $kategoriArtikel=kategoriArtikel::create($input);


        return $kategoriArtikel;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $kategoriArtikel=kategoriArtike::find($id);

        return $kategoriArtikel;

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

        $kategoriartikel=kategoriArtikel::find($id);
        
        if(empty($kategoriartikel)){
                 return response()->json(['message'=>'data tidak ditemukan'], 404);
        }

        $kategoriartikel->update($input);

        return response()->json($kategoriartikel);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       

        $kategoriartikel=kategoriArtikel::find($id);
        
        if(empty($kategoriartikel)){
                 return response()->json(['message'=>'data tidak ditemukan'], 404);
        }

        $kategoriartikel->update($input);

        return response()->json($kategoriartikel);
    }
}
