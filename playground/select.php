
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
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
       <title>Document</title>
   </head>
   <body>
       <table border="1" width="100%">
         <tr>
            <td> รหัส </td>
            <td> ชื่อผู้ใช้</td>
            <td> สถานะ</td>
            <td> แก้ไข</td>
            <td> ลบ</td>
         <tr>
    <?php

     while ($row = $result->fetch_array()) {
        // echo $row["username"] . "<br>";
    ?>
         <tr>
            <td> <?php echo $row["id_user"]; ?></td>
            <td> <?php echo $row["username"]; ?></td>
            <td> <?php echo $row["status"]; ?></td>
            <td><a href="update.php?id=<?php echo $row["id_user"]; ?>&username=<?php echo $row["username"]; ?>&status=<?php echo $row["status"]; ?>"><i class="fas fa-pen"></i></a></td>
            <td><a href="delete.php?id=<?php echo $row["id_user"]; ?>"><i class="fas fa-trash"></i></a></td>
         <tr>
     <?php
    }
    ?>     
       </table>
   </body>

   </html>