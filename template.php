<html>
  <head>
    <meta charset="utf-8">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="estilo.css" type="text/css">
  </head>
  <body>
    <h1>Biblioteca</h1>
    <?require_once 'formulario.php';?>
    <?if($exibir_tabela):?>
      <?require_once 'tabela.php';?>
      <?endif;?>
  </body>
</html>
