<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calculator</title>
  </head>
  <body>
    <form class="" type="text" action="" method="post">
      <input type="text" name="num1" value="" placeholder="Number 1">
      <input type="text" name="num2" value="" placeholder="Number 2">
      <select class="" name="operator">
        <option>None</option>
        <option>Add</option>
        <option>Substract</option>
        <option>Multiply</option>
        <option>Divide</option>
      </select>
      <br>
      <button type="submit" name="submit" value="submit">Calculate</button>
    </form>
    <p>The answer is: </p>

    <?php
      if (isset($_POST['submit'])) {
        $result1 = $_POST['num1'];
        $result2 = $_POST['num2'];
        $operator = $_POST['operator'];

        switch ($operator) {
          case 'None':
              echo "You need to select an operator";
            break;
          case 'Add':
              echo $result1 + $result2;
            break;
          case 'Substract':
              echo $result1 - $result2;
            break;
          case 'Multiply':
              echo $result1 * $result2;
            break;
          case 'Divide':
              echo $result1 / $result2;
            break;
        }
      }
     ?>

  </body>
</html>
