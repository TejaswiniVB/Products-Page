<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: index.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.html');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Cheryl</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="css/shopstyle.css" rel="stylesheet">
</head>

<body id="body">
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="index.html" class="scrollto">Cheryl</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="index_after.php">Home</a></li>
          <li class="menu-active"><a href="shop.php">Shop</a></li>
          <li><button type="button" style="font-size:17px; margin-top:10px;margin-left:20px;font-family: Poppins,sans-serif; font-weight:400; width:100px;"class="btn btn-dark" data-toggle="modal" data-target="#cart"> Cart (<span class="total-count"></span>)</button></li>
          <li><form method='post' action="">
              <input type="submit" value="Logout" name="but_logout" style="font-size:17px; margin-top:10px;margin-left:20px;font-family: Poppins,sans-serif; font-weight:400; width:100px;"class="btn btn-dark">
          </form></li>
        </ul>
      </nav>
    </div>
  </header>
</body>
<h1 style="font-family:Poppins,San Serif; font-weight:bolder; text-align:center; margin-top:30px; color:#fff;text-shadow: -1px -1px 0 #000,1px -1px 0 #000,-1px 1px 0 #000,1px 1px 0 #000;"> Welcome <?php echo $_SESSION['uname']; ?>, Shop Our Favorites!</h1>
  <div class="container1">
  <div class="product-image">
    <img src="img/portfolio/1.jpg" alt="" class="product-pic">
  </div>

  <div class="product-details">
    <header>
      <h3 class="title">Cheryl Cashmere Trench Coat</h3>
      <div class="rate">
        <a href="#!" class="active">♥</a>
        <a href="#!" class="active">♥</a>
        <a href="#!" class="active">♥</a>
        <a href="#!" class="active">♥</a>
        <a href="#!" class="active">♥</a>
      </div>
    </header>
    <article>
      <h7>When it comes to outerwear, Cheryl has you covered.
        This black double-breasted coat from the brand has been exquisitely crafted with the softest wool,
        bringing you just as much comfort as it will impeccable style.</h7>
    </article>
    <div class="controls">
      <div class="selectdiv">
        <select name="size" id="size">
          <option selected> Choose Size </option>
          <option value="xs" id="XS">XS</option>
          <option value="s" id="S">S</option>
          <option value="m" id="M">M</option>
          <option value="l" id="L">L</option>
        </select>
      </div>
    </div>
    <div class="footer1">
      <div class="price">
        <span class="before">$1235</span>
        <span class="current">$869.99</span>
        <h6>(Exclusive of taxes)<h6>
      </div>
      <button type="button">
        <img src="http://co0kie.github.io/codepen/nike-product-page/cart.png" alt="">
        <span><a href="#" data-name="Cheryl_Cashmere_Trench_Coat" data-price="869.99" class="add-to-cart" style="color:#fff">Add to cart</a></span>
      </button>
       <!--a href="#!"><img src="http://co0kie.github.io/codepen/nike-product-page/share.png" alt=""></a-->
    </div>
  </div>
</div>

<div class="container1">
<div class="product-image">
  <img src="img/portfolio/2.jpg" alt="" class="product-pic">
</div>

<div class="product-details">
  <header>
    <h3 class="title">Cheryl Long Coat</h3>
    <div class="rate">
      <a href="#!" class="active">♥</a>
      <a href="#!" class="active">♥</a>
      <a href="#!" class="active">♥</a>
      <a href="#!" class="active">♥</a>
      <a href="#!" class="active">♥</a>
    </div>
  </header>
  <article>
    <h7>When it comes to outerwear, Cheryl has you covered.
      This black double-breasted coat from the brand has been exquisitely crafted with the softest wool,
      bringing you just as much comfort as it will impeccable style.</h7>
  </article>
  <div class="controls">
    <div class="selectdiv">
      <select name="size" id="size">
        <option selected> Choose Size </option>
        <option value="xs">XS</option>
        <option value="s">S</option>
        <option value="m">M</option>
        <option value="l">L</option>
      </select>
    </div>
  </div>
  <div class="footer1">
    <div class="price">
      <span class="before">$2450</span>
      <span class="current">$1980.99</span>
      <h6>(Exclusive of taxes)<h6>
    </div>
    <button type="button">
      <img src="http://co0kie.github.io/codepen/nike-product-page/cart.png" alt="">
      <span><a href="#" data-name="Cheryl_Long_Coat" data-price="1980.99" class="add-to-cart" style="color:#fff">Add to cart</a></span>
    </button>
     <!--a href="#!"><img src="http://co0kie.github.io/codepen/nike-product-page/share.png" alt=""></a-->
  </div>
</div>
</div>

<div class="container1">
<div class="product-image">
  <img src="img/portfolio/4.jpg" alt="" class="product-pic">
</div>

<div class="product-details">
  <header>
    <h3 class="title">Cheryl Mid-Rise Naked Boots</h3>
    <div class="rate">
      <a href="#!" class="active">♥</a>
      <a href="#!" class="active">♥</a>
      <a href="#!" class="active">♥</a>
      <a href="#!" class="active">♥</a>
      <a href="#!" class="active">♥</a>
    </div>
  </header>
  <article>
    <h7>When it comes to outerwear, Cheryl has you covered.
      This black double-breasted coat from the brand has been exquisitely crafted with the softest wool,
      bringing you just as much comfort as it will impeccable style.</h7>
  </article>
  <div class="controls">
    <div class="selectdiv">
      <select name="size" id="size">
        <option selected> Choose Size </option>
        <option value="xs">XS</option>
        <option value="s">S</option>
        <option value="m">M</option>
        <option value="l">L</option>
      </select>
    </div>
  </div>
  <div class="footer1">
    <div class="price">
      <span class="current" style="color:#000">$759.99</span>
      <h6>(Exclusive of taxes)<h6>
    </div>
    <button type="button">
      <img src="http://co0kie.github.io/codepen/nike-product-page/cart.png" alt="">
      <span><a href="#" data-name="Cheryl_Mid_Rise_Naked_Boots" data-price="759.99" class="add-to-cart" style="color:#fff">Add to cart</a></span>
    </button>
     <!--a href="#!"><img src="http://co0kie.github.io/codepen/nike-product-page/share.png" alt=""></a-->
  </div>
</div>
</div>

<div class="container1">
<div class="product-image">
  <img src="img/portfolio/3.jpg" alt="" class="product-pic">
</div>

<div class="product-details">
  <header>
    <h3 class="title">Cheryl Faux Fur Sweatshirt</h3>
    <div class="rate">
      <a href="#!" class="active">♥</a>
      <a href="#!" class="active">♥</a>
      <a href="#!" class="active">♥</a>
      <a href="#!" class="active">♥</a>
      <a href="#!" class="active">♥</a>
    </div>
  </header>
  <article>
    <h7>When it comes to outerwear, Cheryl has you covered.
      This black double-breasted coat from the brand has been exquisitely crafted with the softest wool,
      bringing you just as much comfort as it will impeccable style.</h7>
  </article>
  <div class="controls">
    <div class="selectdiv">
      <select name="size" id="size">
        <option selected> Choose Size </option>
        <option value="xs">XS</option>
        <option value="s">S</option>
        <option value="m">M</option>
        <option value="l">L</option>
      </select>
    </div>
  </div>
  <div class="footer1">
    <div class="price">
      <span class="before">$1900</span>
      <span class="current">$1780.99</span>
      <h6>(Exclusive of taxes)<h6>
    </div>
    <button type="button">
      <img src="http://co0kie.github.io/codepen/nike-product-page/cart.png" alt="">
      <span><a href="#" data-name="Cheryl_Fur_Sweatshirt" data-price="1780.99" class="add-to-cart" style="color:#fff">Add to cart</a></span>
    </button>
     <!--a href="#!"><img src="http://co0kie.github.io/codepen/nike-product-page/share.png" alt=""></a-->
  </div>
</div>
</div>

<div class="container1">
<div class="product-image">
  <img src="img/portfolio/5.jpg" alt="" class="product-pic">
</div>

<div class="product-details">
  <header>
    <h3 class="title">Cheryl Polka Puff-Sleeves Jacket</h3>
    <div class="rate">
      <a href="#!" class="active">♥</a>
      <a href="#!" class="active">♥</a>
      <a href="#!" class="active">♥</a>
      <a href="#!" class="active">♥</a>
      <a href="#!" class="active">♥</a>
    </div>
  </header>
  <article>
    <h7>When it comes to outerwear, Cheryl has you covered.
      This black double-breasted coat from the brand has been exquisitely crafted with the softest wool,
      bringing you just as much comfort as it will impeccable style.</h7>
  </article>
  <div class="controls">
    <div class="selectdiv">
      <select name="size" id="size">
        <option selected> Choose Size </option>
        <option value="xs">XS</option>
        <option value="s">S</option>
        <option value="m">M</option>
        <option value="l">L</option>
      </select>
    </div>
  </div>
  <div class="footer1">
    <div class="price">
      <span class="before">$1450</span>
      <span class="current">$990.99</span>
      <h6>(Exclusive of taxes)<h6>
    </div>
    <button type="button">
      <img src="http://co0kie.github.io/codepen/nike-product-page/cart.png" alt="">
      <span><a href="#" data-name="Cheryl_Puff_Sleeves_Jacket" data-price="990.99" class="add-to-cart" style="color:#fff">Add to cart</a></span>
    </button>
     <!--a href="#!"><img src="http://co0kie.github.io/codepen/nike-product-page/share.png" alt=""></a-->
  </div>
</div>
</div>

<div class="container1">
<div class="product-image">
  <img src="img/portfolio/6.jpg" alt="" class="product-pic">
</div>

<div class="product-details">
  <header>
    <h3 class="title">Cheryl Winter Style Denim Jacket</h3>
    <div class="rate">
      <a href="#!" class="active">♥</a>
      <a href="#!" class="active">♥</a>
      <a href="#!" class="active">♥</a>
      <a href="#!" class="active">♥</a>
      <a href="#!" class="active">♥</a>
    </div>
  </header>
  <article>
    <h7>When it comes to outerwear, Cheryl has you covered.
      This black double-breasted coat from the brand has been exquisitely crafted with the softest wool,
      bringing you just as much comfort as it will impeccable style.</h7>
  </article>
  <div class="controls">
    <div class="selectdiv">
      <select name="size" id="size">
        <option selected> Choose Size </option>
        <option value="xs">XS</option>
        <option value="s">S</option>
        <option value="m">M</option>
        <option value="l">L</option>
      </select>
    </div>
  </div>
  <div class="footer1">
    <div class="price">
      <span class="before">$490</span>
      <span class="current">$415.99</span>
      <h6>(Exclusive of taxes)<h6>
    </div>
    <button type="button">
      <img src="http://co0kie.github.io/codepen/nike-product-page/cart.png" alt="">
      <span><a href="#" data-name="Cheryl_Winter_Style_Denim_Jacket" data-price="415.99" class="add-to-cart" style="color:#fff">Add to cart</a></span>
    </button>
     <!--a href="#!"><img src="http://co0kie.github.io/codepen/nike-product-page/share.png" alt=""></a-->
  </div>
</div>
</div>

</div>

  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Cheryl</strong>. All Rights Reserved.
      </div>
    </div>
  </footer>
  <div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-size:17px; margin-top:10px;margin-left:20px;font-family: Poppins,sans-serif; font-weight:400;">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="show-cart table">

          </table>
          <div>Total price: $<span class="total-cart"></span></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button class="clear-cart btn btn-danger">Clear Cart</button>
          <button type="button" class="btn btn-primary" style="background-color:#000; border:none;">Order Now</button>
        </div>
      </div>
    </div>
  </div>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>
  <script src="contactform/contactform.js"></script>

  <script src="js/main.js"></script>
  <script>
  var shoppingCart = (function() {
  // =============================
  // Private methods and propeties
  // =============================
  cart = [];

  // Constructor
  function Item(name, price,sel, count) {
    this.name = name;
    this.price = price;
    this.sel=sel;
    this.count = count;
  }

  // Save cart
  function saveCart() {
    sessionStorage.setItem('shoppingCart', JSON.stringify(cart));
  }

    // Load cart
  function loadCart() {
    cart = JSON.parse(sessionStorage.getItem('shoppingCart'));
  }
  if (sessionStorage.getItem("shoppingCart") != null) {
    loadCart();
  }


  // =============================
  // Public methods and propeties
  // =============================
  var obj = {};

  // Add to cart
  obj.addItemToCart = function(name, price, sel, count) {
    for(var item in cart) {
      if(cart[item].name === name) {
        cart[item].count ++;
        saveCart();
        return;
      }
    }
    var item = new Item(name, price, sel, count);
    cart.push(item);
    saveCart();
  }
  // Set count from item
  obj.setCountForItem = function(name, count) {
    for(var i in cart) {
      if (cart[i].name === name) {
        cart[i].count = count;
        break;
      }
    }
  };
  // Remove item from cart
  obj.removeItemFromCart = function(name) {
      for(var item in cart) {
        if(cart[item].name === name) {
          cart[item].count --;
          if(cart[item].count === 0) {
            cart.splice(item, 1);
          }
          break;
        }
    }
    saveCart();
  }

  // Remove all items from cart
  obj.removeItemFromCartAll = function(name) {
    for(var item in cart) {
      if(cart[item].name === name) {
        cart.splice(item, 1);
        break;
      }
    }
    saveCart();
  }

  // Clear cart
  obj.clearCart = function() {
    cart = [];
    saveCart();
  }

  // Count cart
  obj.totalCount = function() {
    var totalCount = 0;
    for(var item in cart) {
      totalCount += cart[item].count;
    }
    return totalCount;
  }

  // Total cart
  obj.totalCart = function() {
    var totalCart = 0;
    for(var item in cart) {
      totalCart += cart[item].price * cart[item].count;
    }
    return Number(totalCart.toFixed(2));
  }

  // List cart
  obj.listCart = function() {
    var cartCopy = [];
    for(i in cart) {
      item = cart[i];
      itemCopy = {};
      for(p in item) {
        itemCopy[p] = item[p];

      }
      itemCopy.total = Number(item.price * item.count).toFixed(2);
      cartCopy.push(itemCopy)
    }
    return cartCopy;
  }

  // cart : Array
  // Item : Object/Class
  // addItemToCart : Function
  // removeItemFromCart : Function
  // removeItemFromCartAll : Function
  // clearCart : Function
  // countCart : Function
  // totalCart : Function
  // listCart : Function
  // saveCart : Function
  // loadCart : Function
  return obj;
})();


// *****************************************
// Triggers / Events
// *****************************************
// Add item
$('.add-to-cart').click(function(event) {
  event.preventDefault();
  var name = $(this).data('name');
  var price = Number($(this).data('price'));
  var sel = document.getElementById('size');
  shoppingCart.addItemToCart(name, price, sel, 1);
  displayCart();
});

// Clear items
$('.clear-cart').click(function() {
  shoppingCart.clearCart();
  displayCart();
});


function displayCart() {
  var cartArray = shoppingCart.listCart();
  var output = "";
  for(var i in cartArray) {
    output += "<tr>"
      + "<td>" + cartArray[i].name + "</td>"
      + "<td>(" + cartArray[i].price + ")</td>"
      + "<td><div class='input-group'><button class='minus-item input-group-addon btn btn-primary' style='font-size:17px; background-color:black; border:none; font-weight:400; border-radius:5px;' data-name=" + cartArray[i].name + "> - </button>&nbsp"
      + "<input type='number' class='item-count form-control' style='font-size:17px; font-weight:400; border-radius:5px;' data-name='" + cartArray[i].name + cartArray[i].sel + "' value='" + cartArray[i].count + "'>&nbsp"
      + "<button class='plus-item btn btn-primary input-group-addon' style='font-size:17px; background-color:black; border:none; font-weight:400; border-radius:5px;'  data-name=" + cartArray[i].name + ">+</button></div></td>"
      + " = "
      + "<td>" + cartArray[i].total + "</td>"
      + "<td><button class='delete-item btn btn-danger' data-name=" + cartArray[i].name + ">X</button></td>"
      +  "</tr>";
  }
  $('.show-cart').html(output);
  $('.total-cart').html(shoppingCart.totalCart());
  $('.total-count').html(shoppingCart.totalCount());
}

// Delete item button

$('.show-cart').on("click", ".delete-item", function(event) {
  var name = $(this).data('name')
  shoppingCart.removeItemFromCartAll(name);
  displayCart();
})


// -1
$('.show-cart').on("click", ".minus-item", function(event) {
  var name = $(this).data('name')
  shoppingCart.removeItemFromCart(name);
  displayCart();
})
// +1
$('.show-cart').on("click", ".plus-item", function(event) {
  var name = $(this).data('name')
  shoppingCart.addItemToCart(name);
  displayCart();
})

// Item count input
$('.show-cart').on("change", ".item-count", function(event) {
   var name = $(this).data('name');
   var count = Number($(this).val());
  shoppingCart.setCountForItem(name, count);
  displayCart();
});

displayCart();

</script>

</html>
