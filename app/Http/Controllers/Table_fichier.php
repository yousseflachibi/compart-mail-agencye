<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Table_fichier extends Controller
{
    public function index(Request $request){
        
        $fichier_1 = $request->f1_1; 
        $fichier_2 = $request->f1_2;
        // var_dump($fichier_2);
        // var_dump($fichier_1);
        $tableauname3 = array();
        array_push($tableauname3,array($fichier_1,$fichier_2));

        $tableauname1 = array();
        $files = \File::files(storage_path('file-unique'));
        $nom_fichier = '';
        foreach($files as $key=> $f){
            array_push($tableauname1,array(basename($f), file_get_contents(storage_path('file-unique').'\\'.basename($f)),$nom_fichier));
        }

        return view('fichier_table')->with('tableauname', $tableauname3)->with('tableauname1', $tableauname1);
    }

    public function index_2(Request $request){
        $fichier_1 = $request->f2_1; 
        $fichier_2 = $request->f2_2;
        $tableauname3 = array();
        array_push($tableauname3,array($fichier_1,$fichier_2));

        $tableauname1 = array();
        $files = \File::files(storage_path('file-double'));
        $nom_fichier = '';
        foreach($files as $key=> $f){
            array_push($tableauname1,array(basename($f), file_get_contents(storage_path('file-double').'\\'.basename($f)),$nom_fichier));
        }

        return view('fichier_table_d')->with('tableauname', $tableauname3)->with('tableauname1', $tableauname1);
    }
}
