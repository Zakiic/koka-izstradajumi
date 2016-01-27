
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
    <h1>
        Komentāri:
    </h1>
    <form action = "" method ="POST">
       <textarea rows ="5" cols ="50" placeholder="Apraksts" name ="commentContent"></textarea><br/>
        <input type ="text" placeholder="Vārds" name ="name"><br/>
<input type ="submit" value ="Sūtīt!">
<?php
$nextWeek = time() + (7 * 24 * 60 * 60);
                   // 7 days; 24 hours; 60 mins; 60 secs
echo 'Datums:       '. date('Y-m-d') ."\n";

?><br/>
</form>
    
      <?php include "comments.html";
      ?>  
    

    
    <div>
                        <a href="index.php">Uz sākumu</a>
    </div>
</body>
    
    
</html>