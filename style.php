@import url('https://fonts.googleapis.com/css2?family=Poppins&family=Ubuntu:wght@300;700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    
    font-family: 'Ubuntu', sans-serif;
}

form {
  margin: 20px auto;
  width: 90%;
  max-width: 500px;
  text-align: center;
  line-height: 9;
}

.results{
  margin-left:20px;
  color:#000000;
  background-color:#ffff;
  font-weight:200px;
  line-height:50px;
  font-size:15px;
  
  
  
  
}
.raw-data{

  background-color:#FFF5EE;
  color:#000000;
  font-size:15px;
}

.results h3 {
  color:black;
  margin-left:-2px;
  background-color:	#D3D3D3;
  padding:0px;
  
}

.Domain Information h3 {


  color:black;
  margin-left:-2px;
  background-color:	#D3D3D3;
  padding:0px;
  

}


.container h2 {
    background-color: #333;
    line-height: 3;
    color: aliceblue;
}

.rawdata h3{
  color:black;
  margin-left:-2px;
  background-color:	#D3D3D3;
  padding:0px;
  
}

.important-dates h3 {

  color:black;
  margin-left:-2px;
  background-color:	#D3D3D3;
  padding:0px;

}





h2 {
  font-size: 28px;
  margin-bottom: 20px;
  text-align:center;
}

input[type="text"] {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
  margin-right: 10px;
  font-size: 16px;
  width: 60%;
  max-width: 400px;
}

button[type="submit"] {
    background-color:#6d6ce4;
    border: none;
    font-size: 1.2rem;
    color: white;
    padding: 10px 20px;
    border-radius: 3px;
    cursor: pointer;
}

button[type="submit"]:hover {
  
  background-color: 	#2d45b3;
    border-radius: 7px;
    color: rgb(22, 7, 36);
}


.available {
    font-family: serif;
    color: black;
    font-size: larger;
    letter-spacing: 4px;
    font-size: larger;
    background-color:#cfc9e3;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    max-width:600px;
    margin-left: 4rem;
}

button[type='button'] {
  background-color: #fff;
  color: black;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;  
  margin-left: 16rem;
  margin-top: 3rem;
}

button[type='button']:hover {
  background-color: #00BFFF;
}
.head h4 {
  font-size: 1.5rem;
    margin-bottom: 3rem;
    color: black;
    font-family: serif;
    
}





@media (max-width: 768px) {
        .available {
            font-size: 16px;
        }
        button {
            font-size: 16px;
            padding: 8px 16px;
            margin-bottom:2rem;
        }

        .head h4{
          font-size: 16px;
        }
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

p {
  font-family: initial;
    font-size: large;
}

.container h4 {
  color: red;
    font-size: larger;
    font-family: ser
}

.name p {
  letter-spacing: 8px;
   margin-left: 23px;
    line-height: 3;
    color: navy;
    font-family: serif;
    font-size: 25px;
}


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








@media screen and (max-width: 805px) {
 
  

.list {
position: fixed;
top: 60px;
left: 0;
right: 0;
bottom: 0;
background-color:rgb(22, 7, 36);
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
opacity: 0;
pointer-events: none;
transition: all 0.3s ease-in-out;
}

.list li {
margin: 10px 0;
}

.list a {
font-size: 18px;
color: #333;
text-decoration: none;
transition: color 0.3s ease-in-out;
}

.list a:hover {
color: #666;
}

/* Show and hide menu */
#check:checked ~ .list {
opacity: 1;
pointer-events: auto;
}

/* Search form styles */
.form {
margin-top: 60px;
padding: 10px;
}

.form input[type="text"] {
width: 100%;
margin-bottom: 10px;
}

.form button[type="submit"] {
display: block;
width: 100%;
background-color: #333;
color: #fff;
border: none;
padding: 10px;
cursor: pointer;
transition: background-color 0.3s ease-in-out;
}

.form button[type="submit"]:hover {
background-color: #666;
}

/* Results styles */
.name {
margin-top: 60px;
text-align: center;
}

.results {
margin-top: 20px;
}

.available {

padding: 10px;
margin-bottom: 20px;
margin-left:0px;
}

.domain-info {
margin-bottom: 20px;
}

.domain-info h3 {
margin: 0;
}

.important-dates {
margin-bottom: 20px;
}

.important-dates h3 {
margin: 0;
}

.raw-data {
margin-bottom: 20px;
}

.raw-data h3 {
margin: 0;
}

.raw-data pre {
white-space: pre-wrap;
}
.container {
    width: 100%;
  }
  
  .name {
    width: 100%;
  }
  
  .results {
    width: 100%;
  }
}
