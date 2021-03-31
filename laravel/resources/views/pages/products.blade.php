<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.6/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body>

    <div id="app">

      <div id="container">

        <div class="products-container">
          <div class="select">

            <select v-model="categorySelected" class="" name="">
              <option value="tutti">tutti</option>
              @foreach ($categories as $category)
                <option
                 value="{{$category -> category}}">{{$category -> category}}</option>
              @endforeach
            </select>

            <h1>@{{ categorySelected }}</h1>

          </div>

          @foreach ($products as $index => $product)
            @foreach ($product -> categories as $category)
              @if ($category -> id == 16)
                {{-- <p>{{ $category }}</p> --}}

                <div class="product-cont">

                  <product
                  :route= '@json(route("product-show", $product -> id))'
                  :product_data= '{{$product}}'
                  @@carrello='pushInCart($event)'
                  >
                </product>

              </div>

              @endif
            @endforeach

          @endforeach

          {{-- per fronterd poteri fare una riga che scorre a dx e una a sx --}}

        </div>

        <div class="basket-summary">
          <h1>SOMMARIO-CARRELLO:</h1>

          <div v-for='item in cart_new' class="item-cart-row">
            <div class="item-cart-row-left">
              <i class="far fa-minus-square change_quantity"></i>
              <span class="item_cart_quant">@{{item.quantity}}</span>
              <i  class="far fa-plus-square change_quantity"></i>
              <span class="item_cart_name">@{{item.name}}</span>
            </div>
            <div class="item-cart-row-right">
              <span class="item_cart_price">@{{item.price}}€</span>
            </div>
          </div>

        </div>

      </div>

    </div>


    <script src="{{ asset('/js/app.js')}}" charset="utf-8"></script>
  </body>
</html>
