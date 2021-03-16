<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    @foreach ($products as $key => $product)
      <div class="product">
        <a href="#">
          <img src="" alt="">
        </a>
        <a href="#">
          <div class="product-name">
            {{ $product -> name}}
          </div>
        </a>
        <div class="product-price">
          {{ $product -> price }}
        </div>
      </div>
    @endforeach

  </body>
</html>
