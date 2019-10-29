<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Product Comparison Page</title>

  <?php include 'includes/assets.php' ?>
</head>

<body>
  <header class="bg-dark">
    <nav class="navbar navbar-expand-lg navbar-dark pbg fixed-top bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">COMP 344</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <i class="fa fa-home" style="font-size:28px;color: whitesmoke; margin-top: 5px;"></i>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <i class="fa fa-user" style="font-size:28px;color: whitesmoke; margin-top: 5px;"></i>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Profile
              </a>
            </li>
            <li class="nav-item">
              <i class="fa fa-desktop" style="font-size:28px;color: whitesmoke; margin-top: 5px;"></i>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <i class="fa fa-cogs" style="font-size:28px;color: whitesmoke; margin-top: 5px;"></i>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Settings</a>
            </li>
            <li class="nav-item">
              <i class="fa fa-shopping-cart" style="font-size:28px;color: whitesmoke; margin-top: 5px;"></i>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Cart</a>
            </li>
            <li class="nav-item">
              <i class="fa fa-sign-out" style="font-size:28px;color: whitesmoke; margin-top: 5px;"></i>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Logout</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>

    <section class="container">

      <div class="compare-table">
        <h1>Compare Your Products</h1>
        <ul class="compare-table__row">
          <li class="key">Office Chairs</li>
          <li><img src="images/shirt.jpg" /><br />Shirt</li>
          <li><img src="images/shirt1.jpg" /><br />Shirt1</li>
          <li><img src="images/shirt2.jpg" /><br />Shirt2</li>
        </ul>
        <ul class="compare-table__row">
          <li class="key">SKU</li>
          <li>9746161</li>
          <li>4616131</li>
          <li>6413264</li>
        </ul>
        <ul class="compare-table__row">
          <li class="key">Price</li>
          <li>$</li>
          <li>$</li>
          <li>$</li>
        </ul>

        <ul class="compare-table__row">
          <li class="key">Material</li>
          <li>Polyester</li>
          <li>Cotton</li>
          <li>Leather</li>
        </ul>

        <ul class="compare-table__row">
          <li class="key">Fitting</li>
          <li>Loose</li>
          <li>Box</li>
          <li>Tight</li>
        </ul>

        <ul class="compare-table__row">
          <li class="key">Weather Resistant</li>
          <li><i class="fa fa-check"></i></li>
          <li><i class="fa fa-check"></i></li>
          <li><i class="fa fa-remove"></i></li>
        </ul>
        <ul class="compare-table__row">
          <li class="key"></li>
          <li><a href="index.html">Add to Cart</a></li>
          <li><a href="index.html">Add to Cart</a></li>
          <li><a href="index.html">Add to Cart</a></li>
        </ul>
      </div>

    </section>


    <!-- <section class="container" id="products">
      <h1 class="text-center">Products</h1>
      <div class="cards">

        <div class="card-wrapper">
          <div class="card">
            <img class="card-img-top" src="https://via.placeholder.com/350x250" alt="product 1" />
            <div class="card-body">
              <h3 class="card-title">Cup Brothers</h3>
              <table class="compare-table">
                <thead>
                  <tr>
                    <th scope="col">Attribute</th>
                    <th scope="col">Value</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Price</td>
                    <td>$12.00</td>
                  </tr>
                  <tr>
                    <td>Weight</td>
                    <td>4.5 kg</td>
                  </tr>
                  <tr>
                    <td>Volume</td>
                    <td>18 db</td>
                  </tr>
                </tbody>
              </table>
              <div class="card-button">
                <a class="btn btn-primary" href="#">Compare me!</a>
              </div>
            </div>
          </div>
        </div>

        <div class="card-wrapper">
          <div class="card">
            <img class="card-img-top" src="https://via.placeholder.com/350x250" alt="product 1" />
            <div class="card-body">
              <h3 class="card-title">Plumber Joe</h3>
              <table class="compare-table">
                <thead>
                  <tr>
                    <th scope="col">Attribute</th>
                    <th scope="col">Value</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Price</td>
                    <td>$12.00</td>
                  </tr>
                  <tr>
                    <td>Weight</td>
                    <td>4.5 kg</td>
                  </tr>
                  <tr>
                    <td>Volume</td>
                    <td>18 db</td>
                  </tr>
                </tbody>
              </table>
              <div class="card-button">
                <a class="btn btn-primary" href="#">Compare me!</a>
              </div>
            </div>
          </div>
        </div>

        <div class="card-wrapper">
          <div class="card">
            <img class="card-img-top" src="https://via.placeholder.com/350x250" alt="product 1" />
            <div class="card-body">
              <h3 class="card-title">Dizzy Hedgehog</h3>
              <table class="compare-table">
                <thead>
                  <tr>
                    <th scope="col">Attribute</th>
                    <th scope="col">Value</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Price</td>
                    <td>$12.00</td>
                  </tr>
                  <tr>
                    <td>Weight</td>
                    <td>4.5 kg</td>
                  </tr>
                  <tr>
                    <td>Volume</td>
                    <td>18 db</td>
                  </tr>
                </tbody>
              </table>
              <div class="card-button">
                <a class="btn btn-primary" href="#">Compare me!</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section> -->
  </main>
  <?php include 'includes/footer.php' ?>
</body>

</html>