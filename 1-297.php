<?php

$n1=0;
$n2=0;

if($_POST)
{

    $operazione=$_POST['operazione'];

    if($operazione=='addizione')
    {
        $ris=$_POST['n1']+$_POST['n2'];
        echo "risultato: $ris";
    }
    else if($operazione=='sottrazione')
    {
        $ris=$_POST['n1']-$_POST['n2'];
        echo "risultato: $ris";
    }
    else if($operazione=='moltiplicazione')
    {
        $ris=$_POST['n1']*$_POST['n2'];
        echo "risultato: $ris";
    }
    else if($operazione=='divisione')
    {
        $ris=$_POST['n1']/$_POST['n2'];
        echo "risultato: $ris";
    }
    else if($operazione=='quadrato')
    {
        $ris=$_POST['n1']*$_POST['n1'];
        echo "risultato: $ris";
    }
}

else
{
    echo"<form action=".$_SERVER['PHP_SELF']." method='POST'>";
?>
    NUMERO 1: <input type="text" name="n1">
    <br>
    NUMERO 2: <input type="text" name="n2">
    <br>

    SELEZIONARE L'OPERAZIONE: <SELECT name="operazione">
    <br>
    <option value="addizione">Addizione
    </option>
    <br>
    <option value="sottrazione">Sottrazione</option>
    <br>
    <option value="moltiplicazione">Moltiplicazione</option>
    <br>
    <option value="divisione">Divisione</option>
    <br>
    <option value="quadrato">Quadrato</option>
    </select>

    <input type="submit">
<?php
}
?>