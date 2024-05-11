<?php declare (strict_types = 1);
/* Write your PHP code here

Step 1: Use and declare php strict types

Step 2:  Create a class for account (with its properties e.g. number, type and balance)

Step 3: Create a PHP constructor with argument types e.g. number, type and balance
If a balance is not given when creating the object, a default value of 0.00 should be used.

Step 4: Create two methods for deposit and withdraw which will update the value
stored in the balance property. They should be given arguments and return type declaration of float.

Step 5: Create two objects to represent a checking account and savings account.

Step 6:  An HTML skeleton is drawn. The first row should show headings using
the type property of two objects. To access property use the:
- Name of the variable that holds the object
- Object operator
- Property name

Step 7: In the next table row show the balance property of the objects.

Step 8: In the third row of the table, the balance of each account is updated by calling deposit() or
withdraw() methods. These methods return the new value of balance property and this should be shown in page.
To call a method, you can use
- Name of the variable that holds the object
- Object operator
- Method name with its argument in parantheses

Step 9: In the final row of the table, previous step is repeated using different values.
 */

class Account
{
    public int $number;
    public string $type;
    public float $balance;

    public function __construct(int $number, string $type, float $balance = 0.0)
    {
        $this->number = $number;
        $this->type = $type;
        $this->balance = $balance;
    }

    public function getBalance()
    {
        return $this->balance;
    }
    public function getType()
    {
        return $this->type;
    }
    public function deposit(float $amount): float
    {
        $this->balance += $amount;
        return $this->balance;
    }
    public function withdrawal(float $amount): float
    {
        $this->balance -= $amount;
        return $this->balance;
    }
}

$checking = new Account(123, 'checking', 9.8);
$savings = new Account(123, 'savings', 9.8);

function displayInfo(float $depositAmount, float $withdrawalAmount, object $accountType)
{
    $accountType->getType();
    $accountType->deposit($depositAmount);
    $accountType->withdrawal($withdrawalAmount);
    return $accountType->getBalance();
}
?>

<?php include 'includes/header.php';?>
<h2>Account Balances</h2>
<table>
  <tr>
    <th>Date</th>
    <th><?=$checking->getType()?></th>
    <th><?=$savings->getType()?></th>
  </tr>
  <tr>
    <td>23 June</td>
    <td>$<?=displayInfo(7.9, 3.0, $checking)?></td>
    <td>$<?=displayInfo(7.9, 5.0, $savings)?></td>
  </tr>
  <tr>
    <td>24 June</td>
    <td>$<?=displayInfo(7.9, 3.0, $checking)?></td>
    <td>$<?=displayInfo(7.9, 5.0, $savings)?></td>
  </tr>
  <tr>
    <td>25 June</td>
    <td>$<?=displayInfo(7.9, 3.0, $checking)?></td>
    <td>$<?=displayInfo(7.9, 5.0, $savings)?></td>
  </tr>
</table>
<?php include 'includes/footer.php';?>