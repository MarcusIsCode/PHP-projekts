<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>

    </style>
  </head>
  <body>
  <form>
    <input type="text" name="num1" placeholder="Number 1">
    <input type="text" name="num2" placeholder="Number 2">

    <select name="operator">
      <option>None</option>
      <option>Add</option>
      <option>Subract</option>
      <option>Multiply</option>
      <option>Divde</option>
    </select>
    <br>
    <button type="submit" name="submit" value="submit">calculate</button>
  </form>

</form>
<p>The answer is:</p>
    <?php
       if(isset($_GET['submit'])){

        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];

        switch ($operator) {
          case 'None':
            echo 'You need to select a method!';
            break;

          case 'Add':
            echo $result1 + $result2;
            break;

          case 'Subtract':
            echo  $result1 - $result2;
            break;

            case 'Multiply':
              echo $result1 * $result2;
              break;

              case 'Divde':
                echo $result1 / $result2;
                break;
          }
       }

      ?>

  </body>
</html>
