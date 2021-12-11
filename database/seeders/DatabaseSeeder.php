<?php

namespace Database\Seeders;

use App\Models\Produits;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $produits= new Produits();
        $produits->nom = "Robe numero 1";
        $produits->prix = 50;
        $produits->description = "Description robe numero 1";
        $produits->photo_principale = "robe_numero_1.jpg";
        $produits->save();

        $produits= new Produits();
        $produits->nom = "Robe numero 2";
        $produits->prix = 60;
        $produits->description = "Description robe numero 2";
        $produits->photo_principale = "robe_numero_2.jpg";
        $produits->save();

        $produits= new Produits();
        $produits->nom = "Robe numero 3";
        $produits->prix = 70;
        $produits->description = "Description robe numero 3";
        $produits->photo_principale = "robe_numero_3.jpg";
        $produits->save();

        $produits= new Produits();
        $produits->nom = "Robe numero 4";
        $produits->prix = 80;
        $produits->description = "Description robe numero 4";
        $produits->photo_principale = "robe_numero_4.jpg";
        $produits->save();

        $produits= new Produits();
        $produits->nom = "Robe numero 5";
        $produits->prix = 50;
        $produits->description = "Description robe numero 5";
        $produits->photo_principale = "robe_numero_5.jpg";
        $produits->save();

        $produits= new Produits();
        $produits->nom = "Robe numero 6";
        $produits->prix = 40;
        $produits->description = "Description robe numero 6";
        $produits->photo_principale = "robe_numero_6.jpg";
        $produits->save();

        $produits= new Produits();
        $produits->nom = "Robe numero 7";
        $produits->prix = 30;
        $produits->description = "Description robe numero 7";
        $produits->photo_principale = "robe_numero_7.jpg";
        $produits->save();

        $produits= new Produits();
        $produits->nom = "Robe numero 8";
        $produits->prix = 50;
        $produits->description = "Description robe numero 8";
        $produits->photo_principale = "robe_numero_8.jpg";
        $produits->save();

        $produits= new Produits();
        $produits->nom = "Robe numero 9";
        $produits->prix = 50;
        $produits->description = "Description robe numero 9";
        $produits->photo_principale = "robe_numero_9.jpg";
        $produits->save();
    }
}
