<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesJaneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

         \App\Models\Services_jane::create([    
          
            'nom_service_jane' => 'Chambre',
            'images_service_jane' => 'img\img-press\chambre',
        ]);

        \App\Models\Services_jane::create([    
          
            'nom_service_jane' => 'Bureau studio jane design',
            'images_service_jane' => 'img\img-press\img_studio',
        ]);

        \App\Models\Services_jane::create([    
          
            'nom_service_jane' => 'Salle de bain',
            'images_service_jane' => 'img\img-press\Salle_de_bain',
        ]);

        \App\Models\Services_jane::create([    
          
            'nom_service_jane' => 'Séjour',
            'images_service_jane' => 'img\img-press\salon',
        ]);

        \App\Models\Services_jane::create([    
          
            'nom_service_jane' => 'Cuisine ',
            'images_service_jane' => 'img\img-press\cuisine',
        ]);



        \App\Models\Services_jane::create([    
          
            'nom_service_jane' => 'Escalier ',
            'images_service_jane' => 'img\img-press\marche',
        ]);

    }
}
