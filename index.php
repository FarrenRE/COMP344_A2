<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Product Comparison Page</title>

  <?php include 'includes/assets.php' ?>
</head>

<body>
  <header class="bg-dark">
    <section class="container">
      <nav class="navbar navbar-dark header-nav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#">About</a></li>
          <li class="nav-item active"><a class="nav-link" href="#">Browse Products</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Compare</a></li>
        </ul>
      </nav>
    </section>
  </header>
  <main>
    <section class="container" id="products">
      <h1 class="text-center">Products</h1>
      <div class="cards">

        <div class="card-wrapper">
          <div class="card">
            <img class="card-img-top" src="https://via.placeholder.com/350x150" alt="product 1" />
            <div class="card-body">
              <h3 class="card-title">Cup Brothers</h3>
              <table class="table">
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
                <a class="button button--cta" href="#">Compare me!</a>
              </div>
            </div>
          </div>
        </div>

        <div class="card-wrapper">
          <div class="card">
            <img class="card-img-top" src="https://via.placeholder.com/350x150" alt="product 1" />
            <div class="card-body">
              <h3 class="card-title">Plumber Joe</h3>
              <table class="table">
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
                <a class="button button--cta" href="#">Compare me!</a>
              </div>
            </div>
          </div>
        </div>

        <div class="card-wrapper">
          <div class="card">
            <img class="card-img-top" src="https://via.placeholder.com/350x150" alt="product 1" />
            <div class="card-body">
              <h3 class="card-title">Dizzy Hedgehog</h3>
              <table class="table">
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
                <a class="button button--cta" href="#">Compare me!</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
  </main>
  <?php include 'includes/footer.php' ?>
</body>

</html>