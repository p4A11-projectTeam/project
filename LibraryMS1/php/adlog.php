<?php
  include "connection.php";
  
?>

<!DOCTYPE html>
<html>
<head>

  
</head>
<body>



    <?php

      if(isset($_POST['submit']))
      {
        $count=0;
        $sql="SELECT username from `admin` where username='$_POST[username]' && password='$_POST[password]' ";
        $res=mysqli_query($db,$sql);
        $count=mysqli_num_rows($res);

        
        if($count==0)
        {
          
        ?>
          <script type="text/javascript">
           alert("Username and password doesn't match");
          </script>
        <?php
        }
        else
        {

          ?>
            <script type="text/javascript">
              window.location="index.html"
            </script>
          <?php

        }

      }

    ?>

</body>
</html>