<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.

  GET - for searching something on the site 
  POST - inputing data (for safety use POST) Mostly use POST
*/
if (isset($_POST['submit'])) {
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
  $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

  // $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
  // $age = filter_var($_POST['age'], FILTER_SANITIZE_SPECIAL_CHARS);


  echo $name;
  echo $age;
}

?>



<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
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