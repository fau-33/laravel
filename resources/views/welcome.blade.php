<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Laravel</title>
</head>
<body>
  <h2 style="text-align: center;">Hello World!</h2>
  <h4 style="text-align: center;">
    <a href={{ route('user.index') }}>Listar usuários</a>
  </h4>


</body>
</html>
