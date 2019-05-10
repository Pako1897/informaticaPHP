<?php

$n1=0;
$n2=0;

if($_POST)
{
    $operazione=$_POST['operazione'];

    if($operazione='addizione')
    {
        echo n1+n2;
    }
    else if($operazione='sottrazione')
    {
        echo n1-n2;
    }
    else if($operazione='moltiplicazione')
    {
        echo n1*n2;
    }
    else if($operazione='divisione')
    {
        echo n1/n2;
    }
    else if($operazione='quadrato')
    {
        echo n1*n1+n2*n2;
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

    SELEZIONARE L'OPERAZIONE: <SELECT name=operazione>
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
<?php
}
?>