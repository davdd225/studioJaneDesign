<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FurnitureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           
       $furniture=new \App\Models\table_furniture();
       $furniture->furniture_name = "Chaise pour buffet";
       $furniture->furniture_type = "Chaise à table";
       $furniture->furniture_materiau ="Bois";
       $furniture->furniture_dimension =  720;
       $furniture->furniture_couleur= "Marron";
       $furniture->furniture_description= "Découvrez un Salon  rénové, où l élégance moderne rencontre le confort. Plongez dans une ambiance harmonieuse et laissez-vous séduire par le mariage parfait du design et du bien-être.";
       $furniture->furniture_images="img\Funriture\chaise_2";
       $furniture->save();

    }
}
