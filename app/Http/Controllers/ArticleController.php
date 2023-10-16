<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function prodotti(){
        $products= [
            [
                'name'=>'Zelda Tears of the Kingdom',
                'description'=>'Esplora il regno delle legende perdute',
                'console'=> 'Nintendo Switch',
                'prezzo'=> '70$',
                'img'=> '/image/zelda.jpeg'
            ],
            [
                'name'=> 'Apex Legends',
                'description'=> 'Scegli il tuo destino e comanda il campo di battaglia' ,
                'console'=> 'Play Station 5',
                'prezzo'=> '50$',
                'img'=> '/image/apex.jpeg'
            ],
            [
                'name'=> 'Sekiro Shadow Die Twice', 
                'description'=> 'Mantieni la tua fede e combatti per la redenzione',
                'console'=> 'Xbox Series',
                'prezzo'=> '70$',
                'img'=> '/image/sekiro.jpeg'
            ],
        ];
            return view('articoli', ['products'=> $products]); 
    }

    function productDetail($productDetail) {
        $products= [
            [
                'name'=>'Zelda Tears of the Kingdom',
                'description'=>'Esplora il regno delle legende perdute',
                'console'=> 'Nintendo Switch',
                'prezzo'=> '70$',
                'img'=> '/image/zelda.jpeg'
            ],
            [
                'name'=> 'Apex Legends',
                'description'=> 'Scegli il tuo destino e comanda il campo di battaglia' ,
                'console'=> 'Play Station 5',
                'prezzo'=> '50$',
                'img'=> '/image/apex.jpeg'
            ],
            [
                'name'=> 'Sekiro Shadow Die Twice', 
                'description'=> 'Mantieni la tua fede e combatti per la redenzione',
                'console'=> 'Xbox Series',
                'prezzo'=> '70$',
                'img'=> '/image/sekiro.jpeg'
            ],
        ];
        
        foreach($products as $product){
            if($product['name'] == $productDetail)
            return view('dettaglio', ['product' => $product]);
        }
        return view('dettaglio'); 
    }
}
