  <!-- for the same page for the data  -->

  <form action=<?php echo $_SERVER['PHP_SELF'] ?> method="psot">
      <!-- from the same the page we can see the pages its just a way as the way of the teacher -->
      <input type="text" name="username">
      <input type="submit" name="send">
  </form>

  <?php
    if ($_SERVER['REQUEST_methtod'] == 'POST') {
        echo $_POST['username']; // i dont know why its not able to get the data of any name to store it 
        echo $_REQUEST['username'];
    }
    ?>