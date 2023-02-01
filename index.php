<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DailyChallenge</title>
</head>
<body>
    <div id="content">

      <table  width="400px"  height="250px" cellspacing="0px" cellpadding="0px"  border ="3px">
      <?php
        // initialiser le nombre de ligne, incrementer  et afficher le nombre de ligne avec tr
        for($ligne=1;$ligne<=8;$ligne++)
        { 
          echo "<tr>";
          // initialiser le nombre de colonne et l'incrementer 
          for($col=1;$col<=8;$col++)
          {
            $total=$ligne+$col;
            //$total%2==0  diviser les cases deux à deux en fonction des couleur
            if($total%2==0)
            {
              // cellule en couleur blanche definie avec <td>
              echo "<td height=30px width=30px bgcolor=white></td>";
            }
            else
            {
              // cellule en couleur noir definie avec <td>
              echo "<td height=30px width=30px bgcolor=black></td>";
            }
          }
          echo "</tr>";
        }
      ?>
    </table>

    </div>
</body>
</html>






