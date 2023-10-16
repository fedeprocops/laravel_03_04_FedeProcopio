<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage(){
        $prodotti= [
            [
                'name'=>'NintendoSwitchOLED',
                'type'=> 'console',
                'prezzo'=> '450$',
                'img'=> '/image/switch.jpeg'
            ],
            [
                'name'=>'MSIGamingGL66',
                'type'=> 'PC Gaming',
                'prezzo'=> '1510$',
                'img'=> '/image/pcgaming.jpeg'
            ],
            [
                'name'=>'ControllerSwitch',
                'type'=> 'Controller',
                'prezzo'=> '70$',
                'img'=> '/image/controller.jpeg'
            ],
        
        ]; 
        
            return view('welcome', ['prodotti' => $prodotti]);  
    }

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

    function serviziName ($serviziName){
        $prodotti= [
            [
                'name'=>'NintendoSwitchOLED',
                'type'=> 'console',
                'prezzo'=> '450$',
                'img'=> '/image/switch.jpeg'
            ],
            [
                'name'=>'MSIGamingGL66',
                'type'=> 'PC Gaming',
                'prezzo'=> '1510$',
                'img'=> '/image/pcgaming.jpeg'
            ],
            [
                'name'=>'ControllerSwitch',
                'type'=> 'Controller',
                'prezzo'=> '70$',
                'img'=> '/image/controller.jpeg'
            ],
        
        ]; 
        foreach($prodotti as $prodotto){
            if($prodotto['name']== $serviziName){
                return view('servizi', ['prodotto' =>$prodotto]);
            }
        }
        return view('servizi');
    }

    public function contattaci_submit(Request $request){
        $email = $request->input('email');
        $name = $request-> input('name');
        $message = $request->input('message'); 
        
        $user_data =compact('email', 'name', 'message'); 

        
        Mail::to($email)->send(new ContactMail($user_data));
        Mail::to('admin@example.com')->send(new AdminMail($user_data)); 

        return redirect (route('welcome'))->with('message', 'Grazie per averci contattato'); 
    }
}