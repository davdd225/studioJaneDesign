<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services_jane;
use Illuminate\Support\Facades\DB;


class StudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $classe = ['','shadow',''];
      //  $services = Services_jane::select('images_service_jane','nom_service_jane','id_service_jane' )->get();
        // dd($services);
        $services = DB::table('services_janes')
                        ->get();
            
        return view ('studio', compact('services','classe'));
    }

    public function meubleLonely(int $id)
    {
    
       /* Obtenir les données de la base de données et les renvoyer à la vue. */
        $meubleUnique = DB::table('services_janes')
                         ->where('services_janes.id_service_jane', '=', $id )
                         ->get();
                        //  dd( $meubleUnique);   
         /* Vérifier si le nombre de est égal à 0. Si c'est le cas, il renvoie l'erreur.404
         voir. Si ce n'est pas le cas, elle renvoie la vue oeuvretraditionnelle. */
          if(count($meubleUnique) == 0 ){
              return view('error.404');

          }else{
              return view('galerie',['meubleUnique' => $meubleUnique[0]]);
          }         

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
