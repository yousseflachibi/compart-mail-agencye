<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class EncryptionController extends Controller
{
 public function encrypt(){
     
     $encrypted = Crypt::encryptString('test');
      return $encrypted;
  }
  public function decrypt(){
      $decrypted = Crypt::decryptString('eyJpdiI6ImllM2ZTaFhYYzBkVVUvNVZBZUVKNGc9PSIsInZhbHVlIjoiVzh1MXJ4WllPcHN4TUl4MndPTmFnZ3h6d0pyZ3JHZ2RseWYySDRLRXBkUT0iLCJtYWMiOiI0ZTA2ZmM1NjBlNGVhMDYyY2U2YmMyNzRkN2IyZjFhNDkwNmRhNWU5MjJkNTdjNGFhMGJiNzAyOTA0YzgxNTA2IiwidGFnIjoiIn0=');
      return $decrypted;
  }

    
}