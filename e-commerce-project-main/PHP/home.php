<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/home.css">

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html">login</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <a href="shopping chart.html" class="cart-link"> <!-- Link to the shopping cart page -->
          <img class="chart" src="../image/shopping-cart.png"> Panier
        </a>
      </div>
    </div>
  </nav>

  <div class="product-container">
    <div class="product-card">
      <img src="../image/mr530sg_nb_03_i.webp" alt="Product 1">
      <h3>Product 1</h3>
      <p>$19.99</p>
      <button onclick="addToCart(1)">Add to Cart</button> <!-- Pass product ID to addToCart function -->
    </div>
    <div class="product-card">
      <img src="../image/mr530sg_nb_03_i.webp" alt="Product 2">
      <h3>Product 2</h3>
      <p>$24.99</p>
      <button onclick="addToCart(2)">Add to Cart</button> <!-- Pass product ID to addToCart function -->
    </div>
    <div class="product-card">
      <img src="../image/mr530sg_nb_03_i.webp" alt="Product 2">
      <h3>Product 2</h3>
      <p>$24.99</p>
      <button onclick="addToCart(2)">Add to Cart</button> <!-- Pass product ID to addToCart function -->
    </div>
    <div class="product-card">
      <img src="../image/mr530sg_nb_03_i.webp" alt="Product 2">
      <h3>Product 2</h3>
      <p>$24.99</p>
      <button onclick="addToCart(2)">Add to Cart</button> <!-- Pass product ID to addToCart function -->
    </div>
    <!-- Repeat product cards for other products -->
    <div class="product-card">
      <img src="../image/mr530sg_nb_03_i.webp" alt="Product 1">
      <h3>Product 1</h3>
      <p>$19.99</p>
      <button onclick="addToCart(1)">Add to Cart</button> <!-- Pass product ID to addToCart function -->
    </div>
    <div class="product-card">
      <img src="../image/mr530sg_nb_03_i.webp" alt="Product 2">
      <h3>Product 2</h3>
      <p>$24.99</p>
      <button onclick="addToCart(2)">Add to Cart</button> <!-- Pass product ID to addToCart function -->
    </div>
    <div class="product-card">
      <img src="../image/mr530sg_nb_03_i.webp" alt="Product 2">
      <h3>Product 2</h3>
      <p>$24.99</p>
      <button onclick="addToCart(2)">Add to Cart</button> <!-- Pass product ID to addToCart function -->
    </div>
    <div class="product-card">
      <img src="../image/mr530sg_nb_03_i.webp" alt="Product 2">
      <h3>Product 2</h3>
      <p>$24.99</p>
      <button onclick="addToCart(2)">Add to Cart</button> <!-- Pass product ID to addToCart function -->
    </div>
    <!-- Repeat product cards for other products -->
  </div>

  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3>About Us</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis ante eget urna ultricies varius eget nec
            velit.</p>
        </div>
        <div class="col-md-4">
          <h3>Contact Us</h3>
          <p>Email: contact@example.com<br>Phone: +1234567890</p>
        </div>
        <div class="col-md-4">
          <h3>Follow Us</h3>
          <ul class="social-icons">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

    <!-- JavaScript -->
    <script>
      // Function to add item to the cart
      function addToCart(productId) {
          // Retrieve the existing cart from localStorage or initialize an empty array
          let cart = JSON.parse(localStorage.getItem('cart')) || [];
          // Sample products data (you can replace this with your actual products)
          const products = [
              { id: 1, name: "Product 1", price: 19.99 },
              { id: 2, name: "Product 2", price: 24.99 },
              // Add more products as needed
          ];
          // Find the product by ID
          const productToAdd = products.find(product => product.id === productId);
          // Add the product to the cart
          if (productToAdd) {
              cart.push(productToAdd);
              // Save the updated cart back to localStorage
              localStorage.setItem('cart', JSON.stringify(cart));
              // Redirect the user to the shopping cart page
          window.location.href = 'http://127.0.0.1:5500/html/shopping%20chart.html';
          }

      }
      </script>
</body>

</html>