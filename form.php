<!DOCTYPE html>
<html lang="en">


<style>





</style>



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include('formstyle.php');

?>
  <header class="header">
		<h1 class="logo"><a href="#">Whois</a></h1>
      <ul class="main-nav">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">Contact</a></li>
      </ul>
	</header>





<div class="contact">


<h3>Contact Details</h3>



<form>
  <table>
    <tr>
      <td><label for="name">Name:</label></td>
      <td><input type="text" id="name" name="name"></td>
    </tr>
    <tr>
      <td><label for="phone">Phone Number:</label></td>
      <td><input type="tel" id="phone" name="phone"></td>
    </tr>
    <tr>
      <td><label for="email">Email:</label></td>
      <td><input type="email" id="email" name="email"></td>
    </tr>
    <tr>
      <td><label for="card_number">Card Number:</label></td>
      <td><input type="text" id="card_number" name="card_number"></td>
    </tr>
    <tr>
      <td><label for="expiry_date">Expiry Date:</label></td>
      <td><input type="text" id="expiry_date" name="expiry_date"></td>
    </tr>
    <tr>
      <td><label for="message">Message:</label></td>
      <td><textarea id="message" name="message"></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><button type="submit">Submit</button></td>
    </tr>
  </table>
</form>


</div>

<footer>
    <p>&copy; Domain Checker.</p>
</footer>


</body>
</html>