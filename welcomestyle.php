<style>
 .buy-button {
  background-color:rgb(22, 7, 36) ;
  color: #fff;
  border: none;
  border-radius: 4px;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  margin-top: 2rem;
    margin-left: 10rem
}

.buy-button:hover {
  background-color: #2980b9;
}



.shadow-box {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 400px; /* set your desired width */
  padding: 20px;
  box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.3);
  border-radius: 5px;
}


.content {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.product {
  margin-bottom: 20px;
  text-align: center;
}

.duration {
  margin-bottom: 20px;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.duration .dropdown {
  position: relative;
  display: inline-block;
  margin-bottom: 10px;
}

.duration .dropdown-content {
  display: none;
  position: absolute;
  z-index: 1;
  min-width: 160px;
  padding: 12px 16px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #fff;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
}

.duration .dropdown:hover .dropdown-content {
  display: block;
}

.duration .dropbtn {
  font-size: 16px;
  padding: 10px;
  border: none;
  border-radius: 5px;
  background-color: #fff;
  color: #333;
}

.duration .dropdown-content a {
  display: block;
  padding: 5px 0;
  text-align: center;
}

.duration .dropdown-content a:hover {
  background-color: #f1f1f1;
}

#duration-selected {
  font-size: 16px;
  font-weight: bold;
}

.price {
  text-align: center;
}

.price h2 {
  margin-bottom: 20px;
}

.price-container {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.price-strikethrough {
  font-size: 20px;
  color: #999;
  text-decoration: line-through;
  margin-bottom: 5px;
}

#price {
  font-size: 28px;
  font-weight: bold;
  color: #333;
}


h2 {
  margin: 0 0 10px;
}



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
      margin-top:5px;
    }
  }
   



/*navbar styles */
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


/*Media Queries*/




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


</style>