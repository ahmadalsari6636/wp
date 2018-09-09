<!DOCTYPE html>
<html lang="en">
<head>
<script>
function validateForm() {
    var x = document.forms["myForm"]["qty"].value;
    if (x <= 0) {
        text = "Input not valid";
        document.getElementById("error").innerHTML = text;
        return false;

    }
}
function increaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 1 : value;
  value++;
  document.getElementById('number').value = value;
}

function decreaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value < 1 ? value = 1 : '';
  value--;
  document.getElementById('number').value = value;
}
</script>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Product - Nyleford</title>
  <meta name="description" content="Number 1 Men's Clothing Brand">
  <meta name="author" content="Al Sari Ahmad Mater G">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
 
 <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/main.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="../../media/logo.png">
  
</head> 

<body> 
  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  
<header>
    <img src="../../media/logo.png" width="50" height="50" alt="logo.png"> 
    <h1>Nyleford.</h1>
</header>
   
   
<nav>  
   <ul>
     <li><a href="index.php">Home</a></li>
     <li><a href="all-products.php">All Products </a></li>
     <li><a href="product.php"> Single Product </a></li>
     <li><a href="login.php"> Login </a> </li>
   </ul>
</nav>

<main>
   <section id="product">
	   <div class="left">
          <img class="img-fluid" src="../../media/3-s.jpg" alt="shirts" style="width:50%">
        </div>
        <div class="right">
            <h2>Blue Shirt</h2>
		    <p>Blue colored shirt with a combination of black, the threads give you a cool feeling with thick fabric suitable to be wore in summer or winter conditions.</p>
		  <form name="myForm" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=product" onsubmit="return validateForm()"  method="post"><br>
	         <div class="price"><h3>$70.00</h3></div>
                <input type="hidden" name='id' value="3-s"/>
	            <div class="options">
	                 <label for="option"><h4>Size</h4></label>
		             <select name="option">
                       <option value="small">Small</option>
                       <option value="large">Large</option>
                     </select>
	             </div><br>
               <div class="quantity">
	                <label for="option"><h4>Quantity</h4></label>
		            <button type="button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</button>
		            <input type="text" name="qty" id="number" value="1" />
		            <button type="button" id="increase" onclick="increaseValue()" value="Increase Value">+</button>
		            <p id="error"></p>
               </div> <br>   
				<button type="submit" value="buy">Buy</button>
          </form>   
        </div>
   </section>
</main>

<!----Footer--->

<footer>
      <div class="copyright">
		Copyright © <a href="index.php">Al Sari Ahmed Mater G 2018 (S3682011)</a>
	  </div><br>
	  <div class="copyright">
		Copyright © <a href="index.php">Nyleford 2018™ </a>
	  </div>
</footer>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
