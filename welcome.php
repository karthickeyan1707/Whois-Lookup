<!DOCTYPE html>
<html>
<head>
  <title>Customer Details Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<?php
include('welcomestyle.php');

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

    <h3>Your Shopping Cart </h3>
    <div class="shadow-box">
  <div class="content">
    <div class="product">
      <h2>Product</h2>
      <p>Your domain</p>
    </div>
    <div class="duration">
  <h2>Duration</h2>
  <div class="dropdown">
    <button id="duration-btn" class="dropbtn">Select duration</button>
    <div class="dropdown-content">
      <a href="#" onclick="setDuration(1)">One Month</a>
      <a href="#" onclick="setDuration(3)">Three Months</a>
      <a href="#" onclick="setDuration(6)">Six Months</a>
      <a href="#" onclick="setDuration(12)">One Year</a>
    </div>
  </div>
  <div id="duration-selected"></div> <!-- add new element to display selected duration -->
</div>

    <div class="price">
      <h2>Price</h2>
      <div class="price-container">
        <div class="price-strikethrough">$15</div>
        <div id="price">$11</div>
      </div>
    </div>
  </div>
</div>

<a href="form.php"><button class="buy-button">Buy Now</button></a>








    

  

        <footer>
        <p>&copy; Domain Checker.</p>
        </footer>


<!--<script>
function setDuration(duration) {
  var price = 79;
  if (duration == 3) {
    price *= 3;
  } else if (duration == 6) {
    price *= 6;
  } else if (duration == 12) {
    price *= 12;
  }
  document.getElementById("price").innerHTML = "$" + price;
}
</script> -->

<script>
function setDuration(duration) {
  const price = document.getElementById('price');
  const durationBtn = document.getElementById('duration-btn');
  const durationSelected = document.getElementById('duration-selected'); // get new element

  // update price based on selected duration
  switch (duration) {
    case 1:
      price.innerHTML = '$11';
      break;
    case 3:
      price.innerHTML = '$33';
      break;
    case 6:
      price.innerHTML = '$66';
      break;
    case 12:
      price.innerHTML = '$132';
      break;
  }

  // update duration button text and new element text
  durationBtn.innerHTML = `Duration: ${duration} Month${duration > 1 ? 's' : ''}`;
  durationSelected.innerHTML = `Selected duration: ${duration} Month${duration > 1 ? 's' : ''}`;
}
</script>


</html>

