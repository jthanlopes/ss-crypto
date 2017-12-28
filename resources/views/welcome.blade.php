<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  {{--  --}}

  {{-- Styles --}}
  <link rel="stylesheet" href="">
  {{--  --}}

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
        <textarea rows="10" cols="50" name="text_crypt" placeholder="Digite o texto a ser descriptografado" required></textarea>
        <input type="text" name="key_crypt" placeholder="Digite a chave para descriptografar" required>
        <button type="input">Descriptografar</button>
      </div>
    </form>
  </div>
</body>
</html>
