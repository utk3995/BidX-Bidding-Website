<?php
session_start();
if(session_destroy()) 
{
$_SESSIOn['loginflag']=0;
header("Location: ../index.php"); 
}
?>