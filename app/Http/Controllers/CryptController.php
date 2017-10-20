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
    $text = $request->text;
    $key = $request->key;    
    $result = openssl_encrypt($text, "AES-128-ECB", $key);

    return view('resultCrypt', compact('result'));
  }

  public function descriptografar(Request $request) {    
    $text = $request->text_crypt;
    $key = $request->key_crypt;
    $result = $decrypted = openssl_decrypt($text, "AES-128-ECB", $key);

    return view('resultDecrypt', compact('result'));
  }
}
