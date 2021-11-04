<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;

  
class FileUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fileUpload()
    {
        return view('show-agence');
    }
    public function fileUpload2()
    {
        return view('show-sc2');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fileUploadPost(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:txt,csv|max:2048',
        ]);
    
       // $fileName = time().'.'.$request->file->extension();  

        $file = ''.$request->file->getClientOriginalName();
        $removed = str_replace(" ","-",$file);

        $request->file->move(storage_path('import-sc2'), $removed);
        
        
        return back()
            ->with('success','You have successfully upload file.')
            ->with('file',$removed);
   
    }
    public function fileUploadPost2(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:txt,csv|max:2048',
        ]);
  
        //$fileName = time().'.'.$request->file->extension();
        $file = $request->file->getClientOriginalName();
        $removed = str_replace(" ","-",$file);
        // print_r($removed);
        // var_dump($removed);
        // die($removed);  
   
        $request->file->move(storage_path('import-agence'), $removed);
   
        return back()
            ->with('success','You have successfully upload file.')
            ->with('file',$removed);  
    }
}