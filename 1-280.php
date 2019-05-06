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

        for($i=0;$i<$n;$i++)
        {
            echo"<table border=1> <tr>";
            for($j=0;$j<$n;$j++)
            {
                echo"<td>Cella</td>";
            }
            echo"</table>";
        }
     ?>
</center>


</body>