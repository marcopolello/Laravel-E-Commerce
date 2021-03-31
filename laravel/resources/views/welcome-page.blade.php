<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- font-awesome -->
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        />

        <!-- styles css -->
        <link rel="stylesheet" href="{{ asset('css/app.css')  }}" />
        <title>Home</title>
      </head>
      <body>
        <!-- navbar -->
        <nav class="navbar">
          <div class="nav-center">
            <!-- links -->
            <div>
              <button class="toggle-nav">
                <i class="fas fa-bars"></i>
              </button>
              <ul class="nav-links">
                <li>
                  <a href="{{ route('welcome') }}" class="nav-link">
                    home
                  </a>
                </li>
                <li>
                  <a href="{{ route('products') }}" class="nav-link">
                    products
                  </a>
                </li>
                <li>
                  <a href="" class="nav-link">
                    about
                  </a>
                </li>
              </ul>
            </div>
            <!-- logo -->
            <img src="{{ asset('img/logo-white.svg') }}" class="nav-logo" alt="logo" />
            <!-- cart icon -->
            <div class="toggle-container">
              <button class="toggle-cart">
                <i class="fas fa-shopping-cart"></i>
              </button>
              <span class="cart-item-count">1</span>
            </div>
          </div>
        </nav>
        <!-- hero -->
        <section class="hero">
          <div class="hero-container">
            <h1 class="text-slanted">
              rest, relax, unwind
            </h1>
            <h3>Embrace your choices - we do</h3>
            <a href="{{ route('products') }}" class="hero-btn">
              show now
            </a>
          </div>
        </section>
        <!-- sidebar -->
        <div class="sidebar-overlay">
          <aside class="sidebar">
            <!-- close -->
            <button class="sidebar-close">
              <i class="fas fa-times"></i>
            </button>
            <!-- links -->
            <ul class="sidebar-links">
              <li>
                <a href="{{ route('welcome') }}" class="sidebar-link">
                  <i class="fas fa-home fa-fw"></i>
                  home
                </a>
              </li>
              <li>
                <a href="{{ route('products') }}" class="sidebar-link">
                  <i class="fas fa-couch fa-fw"></i>
                  products
                </a>
              </li>
              <li>
                <a href="" class="sidebar-link">
                  <i class="fas fa-book fa-fw"></i>
                  about
                </a>
              </li>
            </ul>
          </aside>
        </div>
        <!-- cart -->
        <div class="cart-overlay">
          <aside class="cart">
            <button class="cart-close">
              <i class="fas fa-times"></i>
            </button>
            <header>
              <h3 class="text-slanted">your bag</h3>
            </header>
            <!-- cart items -->
            <div class="cart-items"></div>
            <!-- footer -->
            <footer>
              <h3 class="cart-total text-slanted">
                total : $12.99
              </h3>
              <button class="cart-checkout btn">checkout</button>
            </footer>
          </aside>
        </div>
        <!-- featured products -->
        <section class="section featured">
          <div class="title">
            <h2><span>/</span> featured</h2>
          </div>
          <div class="featured-center section-center">
            <h2 class="section-loading">
              loading...
            </h2>
            <!-- single product -->
            <!-- <article class="product">
              <div class="product-container">
                <img src="./images/main-bcg.jpeg" class="product-img img" alt="" />

                <div class="product-icons">
                  <a href="product.html?id=1" class="product-icon">
                    <i class="fas fa-search"></i>
                  </a>
                  <button class="product-cart-btn product-icon" data-id="1">
                    <i class="fas fa-shopping-cart"></i>
                  </button>
                </div>
              </div>
              <footer>
                <p class="product-name">name</p>
                <h4 class="product-price">$9.99</h4>
              </footer>
            </article> -->
            <!-- end of single product -->
          </div>
          <a href="{{ route('products') }}" class="btn">
            all products
          </a>
        </section>

      </body>
    </html>

  </body>
</html>
