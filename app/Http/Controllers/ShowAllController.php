<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class ShowAllController extends Controller
{
    public function afficher()
    {
        return view('show2');
    }
    
    
    public function delete(Request $request) {
            $nom_fichier = $request->value;
            if(File::exists(storage_path('file-unique/'.$nom_fichier.''))){ 
                File::delete(storage_path('file-unique/'.$nom_fichier.''));
            }else{
                dd('File does not exists.');
            }
    
            
            return $nom_fichier;
    }
    public function delete_2(Request $request) {
        $nom_fichier = $request->value;
        if(File::exists(storage_path('file-double/'.$nom_fichier.''))){ 
            File::delete(storage_path('file-double/'.$nom_fichier.''));
        }else{
            dd('File does not exists.');
        }

        
        return $nom_fichier;
}

}
