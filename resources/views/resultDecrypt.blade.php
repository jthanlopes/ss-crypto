<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel</title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <!-- Styles -->
  <style>
    header {
      height: 15vh;
      font-family: sans-serif;
    }
    header h3 {
      margin-left: 15px;
    }
    .container {
      width: 70%;
      margin-right: 15%;
      margin-left: 15%;
    }
    * {
      padding: 0;
      margin: 0;
    }
    .box-01 {
      width: 47.5%;
      float: left;
      margin-right: 2.5%;
    }
    .box-01 textarea {
      width: 100%;
      max-width: 100%;
      min-width: 100%;
    }
    .box-02 {
      width: 47.5%;
      float: left;
      margin-left: 2.5%;
    }
    .box-02 textarea {
      width: 100%;
      max-width: 100%;
      min-width: 100%;
    }
    .box-01 input, textarea, .box-02 input, textarea {
      position: relative;
      width: 100%;
      padding: 5px 0 5px 5px;
      margin-bottom: 20px;
    }
    .box-01 button, .box-02 button {
      padding: 5px;
      width: 120px;
      color: white;
      background-color: green;
      cursor: pointer;
    }  
    @media (max-width: 600px) 
    {
      .box-01 {
        float: none;
        width: 100%;    
        margin: 0 0 30px 0;                
      }
      .box-02 {
        float: none;
        width: 100%;       
        margin: 0;         
      }
    }            
  </style>
</head>
<body>
  <div class="container">
    <header>
      <hgroup>
        <h1>CRIPTOGRAFIA</h1>
        <h3>com base 64 no PHP</h3>
        <hr>
      </hgroup>
    </header>
    <form method="POST" action="{{ route('criptografar') }}">
      {{ csrf_field() }}
      <div class="box-01">
        <textarea rows="10" cols="50" name="text" placeholder="Digite o texto a ser criptografado" autofocus required></textarea>
        <input type="text" name="key" placeholder="Digite a chave para criptografar" required>
        <button type="input">Criptografar</button>
      </div>
    </form>
    <form method="POST" action="{{ route('descriptografar') }}">
      {{ csrf_field() }}        
      <div class="box-02">        
        <textarea rows="10" cols="50" name="text_crypt" placeholder="Digite o texto a ser descriptografado" required>{{ $result }}</textarea>
        <input type="text" name="key_crypt" placeholder="Digite a chave para descriptografar" required>
        <button type="input">Descriptografar</button>
      </div>
    </form>
  </div>
</body>
</html>
