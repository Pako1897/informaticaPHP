<?php

if($_POST)
{
  $somma=0;
  //ciclo che fa uso dell'array associativo $_POST
  $ris=0;
  // Ciclo per esaminare tutti gli elementi dell'array $_POST
  foreach($_POST as $key => $value) 
    {
      echo "Il campo POST: [".$key. "] contiene il valore= ".$value."<BR>";
    }
}

else
{
  echo "<FORM ACTION=".$_SERVER['PHP_SELF']."METHOD='POST'>";
  ?>
    Nome e Cognome:<INPUT TYPE="text" NAME="username">
    <BR>
    <BR>
    Stato civile:
    <BR>
    <INPUT TYPE="radio" NAME="civile" VALUE="coniugato">Coniugato
    <BR>
    <INPUT TYPE="radio" NAME="civile" VALUE="non coniugato">Non coniugato
    <BR>
    <BR>
    Argomenti d'interesse:
    <BR>
    <INPUT TYPE="checkbox" NAME="interesse">Tecnologia
    <BR>
    <INPUT TYPE="checkbox" NAME="moto">Motori
    <BR>
    <INPUT TYPE="checkbox" NAME="viaggi">viaggi
    <BR>
    <BR>
    Dove hai saputo del nostro sito?<SELECT NAME="sito">
    <OPTION VALUE="giornali">Giornali</OPTION>
    <OPTION VALUE="tv">TV</OPTION>
    <OPTION VALUE="internet">Internet</OPTION>
    <OPTION VALUE="amici">Amici</OPTION></SELECT>
    <BR>
    <BR>
    <INPUT TYPE="reset" VALUE=" Azzera "><INPUT TYPE="submit" VALUE="  Invia  ">
<?PHP
  }
?>