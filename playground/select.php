<?php
 include 'template\header.html';
 require_once 'connectdb.php';
    
    $strSQL = "SELECT `id_user`, `username`, `status` FROM `user` WHERE 1";
    $result = $myconn->query($strSQL);

    
   ?>

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
       <a href="insert1.php">เพิ่มผู้ใช้</a>

       <?php
       include 'template\footer.html';
       ?>
   </body>

   </html>