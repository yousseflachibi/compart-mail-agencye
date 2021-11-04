<?php

namespace App\Http\Controllers;


class AgenceController extends Controller
{ 
    public function listfichier(){
        $tableauname = array();
       
        // $path = storage_path('import-agence');
        $files = \File::files(storage_path('import-agence'));
        
        $content = array();
        $nom_fichier = '';
        foreach($files as $key=> $f){
            array_push($tableauname,array(basename($f), file_get_contents(storage_path('import-agence').'\\'.basename($f)),$nom_fichier));
        }
        //var_dump($tableauname);
        return view('ListFile')->with('tableauname', $tableauname); 

    }


}
