

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="store ThemeForest">
    <title>Store</title>
    <!--GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">
     <!-- font awesome-->
     <link rel="stylesheet" href="css/all.css">
     <link rel="stylesheet" href="css/new.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  </head>
  <body>
<div class="main">

<header class="navbar">
<ul class='nav'>
<li><a id="hot_item" call_type="items">items</a></li>
<li><a href="#">portfolio</a></li>
<li><a id ='blogs' href="#">Blog</a></li>
<li><a href="#">pages</a></li>
</ul>
<span style="clear:both;"></span>
<h1 id="logo">wakystore</h1>
<div class="account-icons">
<div class="search">
<a href="#"><i class="fas fa-search"></i></a>
</div>
<div class="setting">
<a href="#"><i class="far fa-user"></i ></a>
</div>
<div class="favorite">
<a href="#"><i class="far fa-heart"></i></a>
</div>
<div class="list">
<a id='grey' href="#"><i class="fas fa-shopping-cart"></i></a>
    <div class="cart-list">
        <span class="fas fa-window-close close"></span>
        <h1> your items</h1>
        <hr>
        <div class='cart-content'>
            <div class="item-product">
            <img src="bed.jpg" alt='bed products'>
            <div class='item-detail'>
                <h1>bed product</h1>
                <h5 id='item-1'>$ <span class="itemPrice">150</span></h5>
                <span class='remove'>remove</span>
                <br>
                <div class="chevron">
                    <i class="fas fa-chevron-up"></i>
                <p class='amount'>1</p>
                    <i class="fas fa-chevron-down"></i>
                </div>
            </div>
                </div>
            <div class="item-product-2">
            <img src="bed.jpg" alt='bed products'>
            <div class='item-detail'>
                <h1>bed product</h1>
                <h5 id='item-1'>$ <span class="itemPrice">22</span></h5>
                <span class='remove'>remove</span>
                <br>
                <div class="chevron">
                    <i class="fas fa-chevron-up"></i>
                <p class='amount'>1</p>
                    <i class="fas fa-chevron-down"></i>
                </div>
            </div>
                </div>

            <div class="cart-footer">
                 <hr>
            <h3> your total:  $ <span id='total'>0</span> </h3>
                <button type="button" id="clear-cart">clear cart</button>
            </div>
        </div>
        </div>
    </div>
</div>

<span></span>

</header>

<section id="category">
  <h2>Best Seller Product</h2>
  <div class="parent" id="men">
 <div class="img-container">
<img src="what.jpg">
<span>men cloth</span>
 </div>

  </div>
  <div class="parent" id="women">
 <div class="img-container">
<img src="what.jpg">
<span>women</span>
 </div>
  </div>
  <div class="parent" id="kid">
 <div class="img-container">
<img src="what.jpg">
<span>kid</span>
 </div>
  </div>
  <div class="parent"  id="accessories">
 <div class="img-container">
<img src="what.jpg">
<span>accessories</span>
 </div>
  </div>

</section>

<form method="post" action="" name="formOne">
    <span style="text-transform: capitalize">file-upload</span>
    <input type='file' name="file_upload" onchange="doChange()" accept="image/*" >
    <br>
    username<input type='text' name="username"><br>
    <input type="checkbox" name='overnight' value="Overnight" > overnight<br>
    <input type="checkbox" name='sun' value="sun">sun<br>
    <input type="checkbox" name='midnight' value="midnight">midnight
    <br> product
    <select name="product" size="2" >
        <option value="handBag">handBag</option>
        <option value="Backpack">Backpack</option>
        <option value="Watches" >Watches</option>
        <option value="Neckless">Neckless</option>

    </select>

    <input type="submit" value="Send Info">

    </form>

      <footer style="background:rgb(72, 224, 164);width:100%;padding: 30px 0 52px;;height:60px">
<h5>&copy;all right reserved</h5>
<p>Rachid Theme by <a href="#">bencoding.com</a></p>
<div class="icons">
	<a href="#"><i class="fab fa-instagram"></i></a>
	<a href="#"><i class="fab fa-facebook-square"></i></a>
	<a href="#"><i class="fab fa-twitter"></i></a>
	<a href="#"><i class="fab fa-pinterest"></i></a>
</div>
</footer>
      </div>

      <!-- <script  src="https://js.stripe.com"></script> -->
      <script>
      </script>
      <script src="js/app.js"></script>
            <script>
//here 
document.addEventListener('DOMContentLoaded', function() {
//          const blog = document.getElementById('blogs');
//          const inside = document.getElementById('inside');
//    
//    $('#blogs').click(function(e) {
//        e.preventDefault()
//        $('html').load('pages.html');
//    })
      
      const myUrl = new URL(window.location.href);
        const goto = document.getElementById('hot_item');
                 myUrl.pathname = "/storecommerce/pages.html";
                goto.onclick = (ev) => {
                    ev.preventDefault();
                    
                    fetch(myUrl).then(response => response.text())
    .then(text => {
//                        document.title = 'hot items';
                        window.history.pushState({id:1}, '', myUrl.href)
            document.body.parentElement.innerHTML =  text;
                        
                       }) 

                }

})
    

        let upload = document.formOne.file_upload;
        function doChange() {
            if (upload.files[0].type == 'image/png' || upload.files[0].type == 'image/jpeg') {
              console.log(upload.value);
    } else {
            alert('Wrong file!')

    }

        }



      </script>
  </body>
</html>