<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body {
  background-color:  #fffdd0;
}



.topnav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 10px;
}


.topnav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: black;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: center;
  cursor: pointer;
  outline: none;
}


.topnav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}


.main {
  margin-left: 200px;
  font-size: 25px; 
  padding: 0px 10px;
}

 {
  background-color: green;
  color: white;
}


.dropdown-container {
  display: none;
  background-color: black;
  padding-left: 8px;
}


.fa-caret-down {
  float: right;
  padding-right: 8px;
}


@media screen and (max-height: 450px) {
  .topnav {padding-top: 15px;}
  .topnav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="topnav">
  <a href="index.php">Home</a>
  
  <button class="dropdown-btn">Products
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
 <a href="index.php?navigation=product">Products</a>
 <a href="index.php?navigation=categories">Category</a>
 <a href="index.php?navigation=create">Create</a>
	
  </div>
  
  <a href ="Customer1.php">Customer</a>
</div>
      <div>         
      <?php 
        switch($navigation){
          case 'product':
            require_once 'product.php';
            break;
          case 'categories':
            require_once 'categories.php';
            break;
          case 'create':
            require_once 'form_create.php';
            break;
          case 'details':
            require_once 'product-details.php';
            break;
        }
    ?>
      </div>
<script>

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
</body>
