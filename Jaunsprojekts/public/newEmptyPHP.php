
    <?php
if($_POST) {
    $name = $_POST['name'];
    $content = $_POST ['commentContent'];
    $handle = fopen("comments.html","a");
    fwrite ($handle, "<b>" . $name . "</b>:<br/>" . $content . "<br/>");
    fclose ($handle);
}

?>


<html>
    <head>
        <link href="css/comment.css" rel="stylesheet">
    </head>
<body>
    <form action = "" method ="POST">
       <textarea rows ="10" cols ="30" placeholder="Apraksts" name ="commentContent"></textarea><br/>
        <input type ="text" placeholder="Vārds" name ="name"><br/>
<input type ="submit" value ="Sūtīt!"><br/>
</form>
      <?php include "comments.html"; ?>  
</body>
    
    
</html>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

