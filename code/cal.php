<div class="user">

    <form action="cal.php"  name="userDetails" id="userDetails" method="get" >
        <input type="text" name="firstName" id="firstName" class="firstName"  placeholder="first name " />
        <input type="text" name="lastName" id="lastName" class="lastName"  placeholder="last name " />
        <input type="text" name="address" id="address" class="address"  placeholder="First line of Address " />
        <input type="text" name="postcode" id="postcode" class="postcode"  placeholder="Postcode " />
        <input type="text" name="email" id="email" class="email"  placeholder="E-Mail " />
        <input type="text" name="phone" id="phone" class="phone"  placeholder="Phone " />

        <input type="submit" id="submitDetails" class="submitDetails" name="submitDetails" value="Submit Your Details" />

    </form>

</div>

 <div class="overallSummary">

  <?php
    $fName = $_GET['firstName'];
    $lName = $_GET['lastName'];
    $address = $_GET['address'];
    $pc = $_GET['postcode'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
echo("firsnName=$firstName</br>");
        var_dump($_GET);
    $userSQL = "INSERT INTO user (forename, surname, address, postcode, email, phone) VALUES ('$fName', '$lName', '$address', '$pc', '$email', '$phone')";


    //$result = mysql_query($userSQL) or die(mysql_error());

   ?>
  </div>

