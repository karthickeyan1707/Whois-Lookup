<style>

footer {

border: 1px solid #a2a2a2;
background-color: #f4f4f4;
-webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;

text-align: center;

padding: 10px;
position: fixed;
left: 0;
bottom: 0;
width: 100%;
color: black;
font-size: large;
font-style: oblique
}


 @media only screen and (max-width: 600px) {
    footer {
      position: static;
    }
  }
/*navbars*/
ul {
  margin: 0;
  padding: 0;
  list-style: none;
}


h2,
h3,
a {
	color: #34495e;
}

a {
	text-decoration: none;
}



.logo {
	margin: 0;
	font-size: 1.45em;
}

.main-nav {
	margin-top: 5px;

}
.logo a,
.main-nav a {
	padding: 10px 15px;
	text-transform: uppercase;
	text-align: center;
	display: block;
}

.main-nav a {
	color: #34495e;
	font-size: .99em;
}

.main-nav a:hover {
	color: #718daa;
}



.header {
	padding-top: .5em;
	padding-bottom: .5em;
	border: 1px solid #a2a2a2;
	background-color: #f4f4f4;
	-webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);
	-moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);
	box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
}


/*
  Media Queries
 */




@media (min-width: 769px) {
	.header,
	.main-nav {
		display: flex;
	}
	.header {
		flex-direction: column;
		align-items: center;
    	.header{
		width: 80%;
		margin: 0 auto;
		max-width: 1150px;
	}
	}

}

@media (min-width: 1025px) {
	.header {
		flex-direction: row;
		justify-content: space-between;
	}

}



/*styles for forms */


table {
  border-collapse: collapse;
  width: 80%;
  margin: 0 auto;
  font-family: Arial, sans-serif;
  font-size: 14px;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
}

input[type=text], input[type=email], input[type=tel], input[type=number], select, textarea {
  width: 100%;
  padding: 12px 16px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  font-family: Arial, sans-serif;
  font-size: 14px;
}

button[type="submit"] {
  display: block;
  margin: auto;
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  border-radius: 4px;
  border: none;
  padding: 10px 20px;
}

button[type="submit"]:hover {
  background-color: #3e8e41;
}


.contact h3 {
    text-align: center;
    font-size: 1.5rem;
    color: #333;
    font-family: serif;
}


 /* Small screen styles */
 @media only screen and (max-width: 600px) {
    td {
      display: block;
      width: 100%;
    }
    
    td:last-child {
      margin-bottom: 20px;
    }
    
    label {
      margin-bottom: 5px;
    }
    
    button[type="submit"] {
      float: none;
      width: 100%;
    }
  }
    
 
</style>