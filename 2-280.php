<html>
<head>
<title>esercizio 1</title>
</head>
<body>

    <center> <h1>Scacchiera</h1> </center>

<center>
    <?php
        $colonne=0;
        $righe=0;
        $n=20;
        $x=0;

        for($i=0;$i<$n;$i++)
        {
            echo"<table border=3 bgcolor=blue> <tr>";
            for($j=0;$j<$n;$j++)
            {
                echo"<td>$x</td>";
                $x+=3;
            }
            echo"</table>";
        }
     ?>
</center>


</body>