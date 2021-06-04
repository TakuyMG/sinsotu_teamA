<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <title>Google Maps API サン</title>
  </head>
  <body>
      <div id="app">
          <main-map></main-map>
      </div>
   
    <script src=" {{ mix('js/app.js') }} "></script>
  </body>
</html>