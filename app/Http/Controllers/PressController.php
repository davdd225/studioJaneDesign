<?php

namespace App\Http\Controllers;

use App\Models\table_furniture;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;



class PressController extends Controller
{
    //
   /**
    * The index function retrieves all furniture data from the table_furniture and passes it to the
    * press view.
    * 
    * @return a view called 'press' and passing the variable 'furnitureCommande' to the view.
    */
    public function index(){

        // $repertoireImg = public_path('img\Funriture\chaise-1');
        // $listFiles = File::files($repertoireImg);
        $furnitureCommande = DB::table('table_furniture')
                            ->get();
        //   foreach($furnitureCommande as $furniture){
        //     $imageDirectory = $furniture->furniture_images;
        //     $listeFiles = File::allFiles( $imageDirectory );
        //     dd( $listeFiles);
        //     $imagePath = public_path('furniture_images/' . $imageDirectory);

        //   }

        // dd( $furnitureCommande);
   
        return view('press', compact('furnitureCommande'));
    }

    public function funriturePress(int $id){

        $furniture = DB::table('table_furniture')
                    ->where('table_furniture.id_funiture','=', $id)
                    ->get();
                    // dd( $furniture);
        if(count($furniture) == 0){
            return view('error.404');

        }else{
            return view('/details', ['furniture' => $furniture[0]]);
        }
      
    }
   
}
