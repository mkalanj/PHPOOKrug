<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action=" " method="post">
            <label> Krug </label>
            <br>
            
            <br>
            <label> Unesi polumjer </label>
            <br>
            <input type="text" name =pol>
            <br>
            <br>
            <input type = "submit" name ="sub" value="Izracunaj">
            <br>
            <br>
            
   
           
        <?php
       if (isset($_POST['sub'])){
           
          
           $pol= $_POST['pol'];
           
           echo "Povrsina kruga je: " .(2*3.14* $pol);
       }
           
        ?>
   </body>
</html>

