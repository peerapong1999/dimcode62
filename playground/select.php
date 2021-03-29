
<?php
 require_once 'connectdb.php';
    
    $strSQL = "SELECT `id_user`, `username`, `status` FROM `user` WHERE 1";
    $result = $myconn->query($strSQL);

    
   ?>
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
   </head>
   <body>
       <table border="1" width="100%">
         <tr>
            <td> User ID </td>
            <td> Username</td>
            <td> Status</td>
         <tr>
    <?php

     while ($row = $result->fetch_array()) {
        // echo $row["username"] . "<br>";
    ?>
         <tr>
            <td> <?php echo $row["id_user"]; ?></td>
            <td> <?php echo $row["username"]; ?></td>
            <td> <?php echo $row["status"]; ?></td>
         <tr>
     <?php
    }
    ?>     
       </table>
   </body>

   </html>