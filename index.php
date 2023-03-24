<html>
<head>
<link rel="stylesheet" href="style.php" media="screen">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

    <header class="header">
		<h1 class="logo"><a href="#">Whois</a></h1>
      <ul class="main-nav">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">Contact</a></li>
      </ul>
	</header>



<?php
include('functions.php');
$result = '';
$domain = '';
$message = '';


if(isset($_POST['domain'])){ 
    $domain = $_POST['domain'];
    $domain = trim($domain);

    // extract only the registered domain
    $domainParts = explode('.', $domain);
    $numParts = count($domainParts);
    $registeredDomain = $domainParts[$numParts-2] . '.' . $domainParts[$numParts-1];

    if(validateDomain($registeredDomain)) {
        if(isDomainAvailable($registeredDomain)) {   
            $result = "<div class='available'>Domain Name: ".$registeredDomain." is available!</div>";
            $result .= "<button type='button' onclick='window.location.href=\"welcome.php\";'>Buy Now</button>";
        } else {
            $result = lookUpDomain($registeredDomain);
        }
    } else {
        $result = lookUpDomain($registeredDomain);
        #$message = "Invalid Input!";
    }
}





?>
<div class="container">
    <!--<h2>Whois Domain Information</h2>-->
    <div class="row">
        <form name="form" class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <input type="text" name="domain" id="domain" class="form-control" value="<?php echo htmlspecialchars($domain); ?>" placeholder="Enter domain name">
            <button type="submit">Search</button>
            <?php if(!empty($message)) echo "<div class='container'><h4>$message</h4></div>"; ?>
        </form>
    </div>
</div>

<div class="name">
    <?php
    // Call the lookUpDomain function with the domain input
    $lookup_result = lookUpDomain($domain);

    // Extract the domain name from the lookup result
    $extracted_domain = '';
    if (preg_match('/Domain Name: ([^\n]+)/', $lookup_result, $matches)) {
        $extracted_domain = strtolower(trim($matches[1]));

    }

    // Print extracted domain name in <p> tag
    echo "<p>$extracted_domain</p>";
    ?>
</div>


    
<div class="results">
        

<?php 

        if(!empty($result)) {
            // check if the result contains domain information
            if(strpos($result, 'Creation Date:')) {
                // separate domain information
                $domainInfo = explode("\n", $result);
                $domainName = "";
                $creationDate = "";
                $registryID = "";
                $nameServers = "";
                $registryExpiryDate = "";
                $updatedDate = "";
                foreach($domainInfo as $line) {
                    if(strpos($line, 'Domain Name:') !== false) {
                        $domainName = trim(str_replace('Domain Name:', '', $line));
                    }
                    if(strpos($line, 'Creation Date:') !== false) {
                        $creationDate = trim(str_replace('Creation Date:', '', $line));
                    }
                    if(strpos($line, 'Registry Domain ID:') !== false) {
                        $registryID = trim(str_replace('Registry Domain ID:', '', $line));
                    }
                    if(strpos($line, 'Name Server:') !== false) {
                        $nameServers .= trim(str_replace('Name Server:', '', $line)) . "<br>";
                    }
                    if(strpos($line, 'Registry Expiry Date:') !== false) {
                        $registryExpiryDate = trim(str_replace('Registry Expiry Date:', '', $line));
                    }
                    if(strpos($line, 'Updated Date:') !== false) {
                        $updatedDate = trim(str_replace('Updated Date:', '', $line));
                    }
                }
                // display domain information
                echo "<div class='domain-info'>";
                echo "<h3>Domain Information</h3>";
                echo "<p>Domain Name: " . $domainName . "</p>";
                echo "<p>Creation Date: " . $creationDate . "</p>";
                echo "<p>Registry Domain ID: " . $registryID . "</p>";
                echo "<p>Name Servers:<br>" . $nameServers . "</p>";
                echo "</div>";
                
                // display important dates
                
                echo "<div class='important-dates'>";
                echo "<h3>Important Dates</h3>";
                echo "<p>Registry Expiry Date: " . $registryExpiryDate . "</p>";
                echo "<p>Updated Date: " . $updatedDate . "</p>";
                echo "<p>Creation Date: " . $creationDate . "</p>";
                echo "</div>";
                
                // display raw data
                
                echo "<div class='raw-data'>";
                echo "<h3>Raw Data</h3>";
                echo "<pre>" . htmlentities($result) . "</pre>";
                echo "</div>";
            }
        
            // check if the result contains availability information
            else {
                echo "<div class='head'><h4>Looks like this domain has not been registered yet</h4></div>";
                echo "<div class='available'>" . $result . "</div>";
               
            }
        }
        ?>
  

</div> 


</body>
<div class = "footer">

        <footer>
        <p>&copy; Domain Checker.</p>
        </footer>

    </div>
</html>
