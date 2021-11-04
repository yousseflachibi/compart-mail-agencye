<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
//use Illuminate\Support\Facades\Response as FacadeResponse;
use File;



class FileDownloadController extends Controller
{
    // public function index(Request $request) {
    //     $nom_fichier = $request->input('name');
    //     var_dump( $nom_fichier);
    //     exit;
    //     $file_path = storage_path('file-unique\\'.$nom_fichier.'');
    //     return response()->download($file_path);
    //   }
    // public function index(Request $request)
    // {
    //     var_dump($request);
    //     exit;
    //     $nom_fichier = $request->value;
    //      var_dump($nom_fichier);
    //     exit;
    //     $path2 = storage_path('file-unique\\'.$nom_fichier.'');

    //     //$headers = ['Content-Type: application/txt'];
    //     $headers = array(
    //         'Content-Type: application/txt',
    //       );

    //       return Storage::download($nom_fichier,$path2, $headers);
    // }
    public function index(Request $request)
    {
        $nom_fichier = $request->value;
        $path1 = storage_path('file-unique\\'.$nom_fichier.'');

        // if(File::exists(storage_path('file-unique/'.$nom_fichier.''))){ 
            
        // }else{
        //     dd('File does not exists.');
        // }
        $headers = array(
                   'Content-Type: application/txt',
                  ); 

        return response()->download($path1);//Response::download(storage_path('file-unique',$nom_fichier,$headers));       
    }
    public function index2(Request $request)
    {
        $nom_fichier = $request->value;
        // $path2 = storage_path('file-double\\'.$nom_fichier.'');
        //$headers = ['Content-Type: application/txt'];
        //$fileName = time().'.txt';
        $headers = array(
            'Content-Type: application/txt',
          );
        
        return response()->download(storage_path('file-double\\'.$nom_fichier.''));//Storage::download($path2);
                /// db hada katjib path kat7ato mabantsh liya shi actio  dyal telechaeement fih
        //return $nom_fichier.'**';//response()->download($path2, $fileName, $headers);//att OK
    }
}