<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <title>Document</title>
</head>
<body>
    <div class="top-header">
      <div class="left">
        <img src="images/1200px-Flag_of_Pakistan.svg.webp" alt="" />
        <select>
          <option class="opt" value="PAK">PAK</option>
          <option class="opt" value="USA">USA</option>
          <option class="opt" value="IND">IND</option>
        </select>
        <p>+777777646734</p>
      </div>
      <div class="right">
        <a href="#">My Account</a>
        <a href="#">Wish List</a>
        <a href="#">Shopping</a>
        <a href="#">Cart</a>
        <a href="#">Checkout</a>
      </div>
    </div>
    <div class="main-header-section" id="header">
      <div class="left">
        <h1>Adii</h1>
      </div>
      <div class="center">
        <a href="#">Home</a>
        <a href="#">Category</a>
        <div class="dropdown">
          <a href="#" class="latest" onclick="DropDown()"
            >Latest <i class="fas fa-angle-down"></i
          ></a>
          <div id="myDropdown" class="dropdown-content">
            <a href="#">Link1</a>
            <a href="#">Link2</a>
            <a href="#">Link3</a>
            <a href="#">Link4</a>
          </div>
        </div>
        <div class="dropdown">
          <a href="#" class="latest" onclick="DropDown()"
            >Blog <i class="fas fa-angle-down"></i
          ></a>
          <div id="myDropdown" class="dropdown-content">
            <a href="#">Link1</a>
            <a href="#">Link2</a>
            <a href="#">Link3</a>
            <a href="#">Link4</a>
          </div>
        </div>
        <a href="#">Pages</a>
        <a href="#">Contact</a>
      </div>
      <div class="right">
        <form action="#" class="search-product">
          <input type="Search" name="search" placeholder="Search Products" />
          <div class="search-icon">
            <i class="fas fa-search"></i>
          </div>
        </form>
        <div class="wish-list">
          <i class="far fa-heart"></i>
          <span class="wish-list-count">02</span>
        </div>
        <div class="cart">
          <i class="fas fa-shopping-cart"></i>
          <span class="cart-count">02</span>
        </div>
        <button class="sign-btn">Sign In</button>
      </div>
    </div>
</body>
</html>