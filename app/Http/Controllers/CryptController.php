<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CryptController extends Controller
{
  public function __construct()
  {        
  }

  public function criptografar(Request $request) {    
    $final = "Texto: " . $request->text . ", Chave: " . $request->key;
    dd($final);
  }

  public function descriptografar(Request $request) {
    $final = "Texto: " . $request->text_crypt . ", Chave: " . $request->key_crypt;
    dd($final);
  }
}
