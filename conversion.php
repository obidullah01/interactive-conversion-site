<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <p>Page 2 [Conversion]</p>
  <p>Conversion site </p>
  1. <a href="home.php">Home</a> 2. <a href="conversion.php">Conversion Rate</a> 3. <a href="history.php">History</a>

  <p>Conversion Rate</p>
  <form class="" action="conversion.php" method="post">
    <select id="ddlView" class="" name="Distance" required>
      <option value="">Select</option>
      <option value="f2i">feet to inch</option>
      <option value="i2f">inch to feet</option>
      <option value="f2c">feet to centimeter</option>
      <option value="c2f">centimeter to feet</option>
      <option value="i2c">inch to centimeter</option>
    </select>
    <input id="amount" type="text" name="amount" value="" placeholder="Enter a Value" required><br>
    <br>
    <br>


    <?php

    if (isset($_POST['convert'])) {
      $amount = $_POST['amount'];
      $option = $_POST['Distance'];
      $csvFile = fopen('history.csv', 'a');

      if ($option == 'f2i') {
        $result = $amount * 12;
        $data =  $amount . " Foot = " . $result . " Inch\n";
        fwrite($csvFile, $data);
        echo $data;

      }
      if ($option == 'i2f') {
        $result = $amount / 12;
        $data =  $amount . " Inch = " . $result . " Foot\n";
        fwrite($csvFile, $data);
        echo $data;
      }
      if ($option == 'f2c') {
        $result = $amount * 30.5;
        $data = $amount . " Foot = " . $result . " centimeter\n";
        fwrite($csvFile, $data);
        echo $data;
      }
      if ($option == 'c2f') {
        $result = $amount / 30.5;
        $data = $amount . " centimeter = " . $result . " foot\n";
        fwrite($csvFile, $data);
        echo $data;
      }
      if ($option == 'i2c') {
        $result = $amount * 2.54;
        $data = $amount . " inch = " . $result . " centimeter\n";
        fwrite($csvFile, $data);
        echo $data;
      }



    } else {
      echo "Choose a Conversion Option";
    }


    ?>
    </h3>
    <button id="convert" type="submit" name="convert" onclick="validate()">SUBMIT</button>

  </form>
  <script src="./script.js"></script>
</body>

</html>