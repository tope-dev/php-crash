<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.

  GET - for searching something on the site 
  POST - inputing data (for safety use POST) Mostly use POST
*/
if(isset($_POST['submit'])) {
  echo $_POST['name'];
  echo $_POST['age'];

}

?>


<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Brad&age=30">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <div>
    <label for="name">Name: </label>
    <input type="text" name="name">
  </div>
  <div>
    <label for="age">Age: </label>
    <input type="number" name="age">
  </div>
  <input type="submit" value="Submit" name="submit">
</form>