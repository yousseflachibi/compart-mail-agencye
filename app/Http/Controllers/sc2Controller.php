<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Response;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Exception;
use Illuminate\Support\Facades\Crypt;
use DateTime;

use Illuminate\Http\Request;

class sc2Controller extends Controller
{

    public function listagence_one_file(Request $request){
        $tableauname2 = array();
       
        $path2 = storage_path('import-sc2');
        $files2 = \File::files($path2);
        
        $content = array();
        $nom_fichier = $request->nom_fichier;
        /*$array_nom_fichier = array();
        array_push($array_nom_fichier,$nom_fichier);*/


        foreach($files2 as $key=> $k){
            array_push($tableauname2,array(basename($k), file_get_contents($path2.'\\'.basename($k)), $nom_fichier));
        }

        return view('ListFile2')->with('tableauname', $tableauname2); 
    }

    
    public function comparaison_func(Request $request){
        $nom_fichier = $request->nom_fichier; 
        //die($nom_fichier);
        $two_fichier_array = explode('||',$nom_fichier);
        $fichier_1 = $two_fichier_array[0];
        $fichier_2 = $two_fichier_array[1];
        $tableauname3 = array();
        array_push($tableauname3,array($fichier_1,$fichier_2));

        $tableauname1 = array();
        $files = \File::files(storage_path('file-unique'));
        $nom_fichier = '';
        foreach($files as $key=> $f){
            array_push($tableauname1,array(basename($f), file_get_contents(storage_path('file-unique').'\\'.basename($f)),$nom_fichier));
        }

        return view('Sc2/showall')->with('tableauname', $tableauname3)->with('tableauname1', $tableauname1);
    }

    
      //-------------- comparer les fichiers ---------
      
      public function comparaison_func_traitement(Request $request){
        $nom_fichier = $request->value; 
        //die($nom_fichier);
        $two_fichier_array = explode('||',$nom_fichier);
        $fichier_1 = $two_fichier_array[0];
        $fichier_2 = $two_fichier_array[1];
        $tableauname3 = array();
        //array_push($tableauname3,array($fichier_1,$fichier_2));
        
        
        $path2 = storage_path('import-sc2');// array_intersect_key(array $array, array ...$arrays): array
        $path33 = storage_path('import-agence');

        $content_1 = file_get_contents($path33.'\\'.basename($fichier_1));
        $content_2 = file_get_contents($path2.'\\'.basename($fichier_2));

        //die($path2.'\\'.basename($fichier_1));
        /*$myfile = fopen("".$path2."\\result2.diff"."", "w") or die("Unable to open file!");
        fclose($myfile);*/

        //$result_test = xdiff_file_diff(''.$path2.'\\'.basename($fichier_1).'',''.$path2.'\\'.basename($fichier_2).'',''.$path2.'\\result.diff'.'');
      
        //die($result_test);
        
        $fileA = storage_path('import-agence').'\\'.basename($fichier_1);
        $fileB = $path2.'\\'.basename($fichier_2);



        //------------------
        $t1 = array();
        $t2 = array();
        $t2_ = array();
        $t11 = array();
        $t22 = array();
        $fileA = 'import-agence'.'\\'.basename($fichier_1);
        $h = fopen(storage_path($fileA), "r") or die("Unable to open file!-1");
        while($ligne = fgets(($h))){
            
            $t1[trim($ligne)] = "";
            array_push($t11,trim($ligne));
              
        }


        $fileB = 'import-sc2'.'\\'.basename($fichier_2);
        $h = fopen(storage_path($fileB), "r") or die("Unable to open file!-2");
        while($ligne = fgets(($h))){

            $t2[md5(trim($ligne))] = "";
            //array_push($t22,trim($ligne));
            array_push($t2_,((trim($ligne).":".md5(trim($ligne)))));
            array_push($t22,md5(trim($ligne)));

        }
        // var_dump($t11);
        // var_dump($t22);

        function array_diff_key_our_version($inpuut_array_1,$inpuut_array_2){
            $array_1_1 = array();
            $array_1_2 = array();
            $array_1_1 = $inpuut_array_1;
            $array_1_2 = $inpuut_array_2;
            /*if(count($inpuut_array_1)>count($inpuut_array_2)){
                $array_1_1 = $inpuut_array_1;
                $array_1_2 = $inpuut_array_2;
            }else if(count($inpuut_array_1)<count($inpuut_array_2)){
                $array_1_1 = $inpuut_array_2;
                $array_1_2 = $inpuut_array_1;
            }else{
                $array_1_1 = $inpuut_array_1;
                $array_1_2 = $inpuut_array_2;
            }*/
            
            $result_array = array();
            for($i=0;$i<count($array_1_2);$i++){
                $is_here = 0;
                for($j=0;$j<count($array_1_1);$j++){
                    if($array_1_2[$i]==$array_1_1[$j]){
                        //print_r($inpuut_array_1[$i].'=='.$inpuut_array_2[$j]);
                        $is_here = $is_here+1;
                    }
                }
                if($is_here==0){
                    //print_r($array_1_1[$i]);
                    array_push($result_array,$array_1_2[$i]);
                }
            }
            return $result_array;
        }

        //var_dump($t1);
        //var_dump($t2);

        $unique = array_diff_key_our_version($t11,$t22);
        //$unique = array_diff_key($t1_switch,$t2_switch);
        // $decry_unique = openssl_decrypt($unique,'','',1,'');
        // var_dump($unique);
         

        $doublons = array_intersect_key($t1,$t2);
        // var_dump($doublons);
        // $decry_doublons = openssl_decrypt($doublons,'','',1,'');
        // var_dump($decry_doublons);
       

        $path3 = storage_path('file-unique');
        $path4 = storage_path('file-double');
//resulat-1-doublons-20092021                  supprimer X         dow++
        $today = new DateTime();
        $today = date("d").'-'.date('m').'-'.date('Y');
        $filenameDoublons = $path4.'\\'.'Double-'.basename($fichier_2).'_By_'.basename($fichier_1).count($doublons).'_'.$today.'.csv';//txt';
        $do_w = fopen(($filenameDoublons), 'w') or die("Unable to open file! 2");
        foreach($doublons as $l => $rs){
            for($o=0;$o<count($t2_);$o++){
                $array_split = explode(':',$t2_[$o]);
                if($array_split[1]==$l){
                    fputs($do_w, $array_split[0]."\n");
                }
            }
        }
        fclose($do_w);

        $today = new DateTime();
        $today = date("d").'-'.date('m').'-'.date('Y');
        $filenameUnique = storage_path('file-unique').'\\'.'Unique-'.basename($fichier_2).'_By_'.basename($fichier_1).count($doublons).'_'.$today.'.csv';//.txt';
        $do_w = fopen(($filenameUnique), 'w') or die("Unable to open file! 1");
        //var_dump(count($t2_).'**********');
        for($m=0;$m<count($unique);$m++){
            for($o=0;$o<count($t2_);$o++){
                $array_split = explode(':',$t2_[$o]);
                //var_dump($array_split[1].'=='.$unique[$m]);
                if($array_split[1]==$unique[$m]){
                    fputs($do_w, $array_split[0]."\n");
                }
            }
        }
        
        fclose($do_w);

        
        //------------------
         
        
        $lien_vers_unique = storage_path('file-unique').'\\'.'result_'.count($unique).'uniques.csv';//.txt';
        $lien_vers_doublons = $path4.'\\'.'result_'.count($doublons).'doublons.csv';//.txt';
        

        $fileA = $path33.'\\'.basename($fichier_1);
        $fileB = $path2.'\\'.basename($fichier_2);
        
        

        

        $tableauname3 = array();
        array_push($tableauname3,array("djkqsdh","lsdfsdlkflsd"));

        $tableauname1 = array();
        $files = \File::files(storage_path('file-unique'));
        $nom_fichier = '';
        foreach($files as $key=> $f){
            array_push($tableauname1,array(basename($f), file_get_contents(storage_path('file-unique').'\\'.basename($f)),$nom_fichier));
        }

        return "";

        //return view('Sc2/showall')->with('tableauname', $tableauname3)->with('tableauname_unique', $tableauname_unique)->with('tableauname_doublons', $tableauname_doublons);
        

        
        
    }
    

}