<?php

class Calculator
{
    private $number1;
    private $number2;

    public function __construct($number1, $number2)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
    }

    public function addition()
    {
        return $this->number1 + $this->number2;
    }

    public function substraction()
    {

        return $this->number1 - $this->number2;

    }
    public function multiplication()
    {
        return $this->number1 * $this->number2;
    }

    public function dividation()
    {
        if ($this->number2 == 0) {
            throw new Exception("Error: Cannot divide by zero");

        }
        return $this->number1 / $this->number2;
    }

}

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // check for post method
    if (isset($_POST['submit'])) { // check for submit button is in action
        if (!empty($_POST['number1']) && !empty($_POST['number2'])) { // check for input fields are not empty
            // assign the values
            $number1 = filter_var($_POST['number1'], FILTER_VALIDATE_FLOAT);
            $number2 = filter_var($_POST['number2'], FILTER_VALIDATE_FLOAT);

            if (!$number1 || $number2) {
                die("Error! Invalid input! Must be a number");
            }

            $calculator = new Calculator($number1, $number2);
            if (isset($_POST['method'])) {

                $method = $_POST['method'];

                switch ($method) {
                    case "addition":
                        $result = "Addition: " . $calculator->addition();
                        break;
                    case "substraction":
                        $result = "Subtraction: " . $calculator->substraction();
                        break;
                    case "multiplicaiton":
                        $result = "Multiplication: " . $calculator->multiplication();
                        break;
                    case "dividation":
                        try {
                            $result = "Division: " . $calculator->dividation();
                        } catch (Exception $e) {
                            $result = "Error! " . $e->getMessage();
                        }
                        break;
                    default:
                        die("Invalid Operation");
                }
            }

        } else {
            die("Both inputs must be filled out!");
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calculator</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <header>
      <h2>Calculator</h2>
    </header>
    <main class="container">
      <div>
      <p class="result"><?=$result?></p>
        <form action="index.php" method="post">
          <div>
            <label for="number1">Number 1</label>
            <input type="number" name="number1" id="number1" />
          </div>
          <div>
            <label for="number2">Number 2</label>
            <input type="number" name="number2" id="number2" />
          </div>
          <div class="options">
            <select name="method" id="method">
              Choose a mehtod

              <option value="addition">Add</option>
              <option value="substraction">Substract</option>
              <option value="multiplicaiton">Multiply</option>
              <option value="dividation">Divide</option>
            </select>
          </div>
          <input type="submit" name="submit" value="Calculate" />
        </form>
      </div>
    </main>
  </body>
</html>
