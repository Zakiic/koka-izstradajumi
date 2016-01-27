<?php

if(!mysql_connect("correct host","correct username","correct password"))

{

die('oops connection problem ! --> '.mysql_error());

}

if(!mysql_select_db("correct db"))

{

die('oops database selection problem ! --> '.mysql_error());

}



?>