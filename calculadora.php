<!DOCTYPE html>
    <html lang = "pt-BR">
    <head>
        <meta charset="utf-8"/>
         <title> Calculadora PHP </title>
    </head>
    <body>
        <?php

          $nmr1 = $_POST["numero1"];
          $nmr2 = $_POST["numero2"];
          $op = $_POST["op"];
          $resultado = 0;

          if($op == "soma")
          {
             $resultado = $nmr1 + $nmr2;
            echo '<h3>A soma deu '.$resultado.'</h3>';
          }
          if($op == "sub")
          {
            $resultado = $nmr1 - $nmr2;
            echo '<h3>A subtração deu '.$resultado.'</h3>';
          }
          if($op == "div")
          {
            $resultado = $nmr1 / $nmr2;
            echo '<h3>A divisão deu '.$resultado.'</h3>';
          }
          if($op == "mult")
          {
            $resultado = $nmr1 * $nmr2;
            echo '<h3>A multiplicação deu '.$resultado.'</h3>';
          }


        ?>
    </body>
</html>
