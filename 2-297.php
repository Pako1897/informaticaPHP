<?php

if($_POST)
{
    if(isset($_POST['n']))
    {
    for($i=0;$i++;$i<11)
    {
        echo $_POST['n']*i;
        echo "<br>";
    }
}
}

else
{
    echo "<FORM ACTION=".$_POST['PHP_SELF']."METHOD='POST'>"
?>
    Inserire numero: <input type="text" name="n">
                     <input type="submit" value="invia">

<?php
}
?>