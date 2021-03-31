<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.6/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  </head>
  <body>

    <div id="app">
      <button style="margin: 20px; padding: 20px;" @click="showCart()" type="button" name="button">cosa c'è dentro al carrello</button>

      <div id="container">

        <div class="products-container">
          <div class="select">

            <select v-model="categorySelected" class="" name="">
              <option value="tutti">tutti</option>
              @foreach ($categories as $category)
                <option
                 value="{{$category -> id}}"
                 >
                 {{$category -> category}} {{$category -> id}}
                </option>
              @endforeach
            </select>

            <h1>@{{ categorySelected }}</h1>
            {{-- <p>@{{categories}}</p> --}}

          </div>

          @foreach ($products as $index => $product)
            @foreach ($product -> categories as $category)
              {{-- <p>{{$category -> id}}</p> --}}

                <div v-if="categorySelected == 'tutti'" class="product-cont">

                  <product
                  :category='{{$category}}'
                  :route= '@json(route("product-show", $product -> id))'
                  :product_data= '{{$product}}'
                  @@carrello='pushInCart($event)'
                  >
                  </product>

                </div>

                <div v-if="categorySelected == {{$category -> id}}"
                class="product-cont"  >
                  <product
                  :category='{{$category}}'
                  :route= '@json(route("product-show", $product -> id))'
                  :product_data= '{{$product}}'
                  @@carrello='pushInCart($event)'
                  >
                  </product>
                </div>

            @endforeach

          @endforeach

          {{-- per fronterd poteri fare una riga che scorre a dx e una a sx --}}

        </div>

        <div class="basket-summary">
          <h1>SOMMARIO-CARRELLO:</h1>

          <div v-for='item in cart_new' class="item-cart-row">
            <div class="item-cart-row-left">
              <i class="far fa-minus-square change_quantity"></i>
              <span class="item_cart_quant">quantità selezionata: @{{item.quantity}}</span>
              <br>
              <i  class="far fa-plus-square change_quantity"></i>
              <span class="item_cart_name">nome prodotto: @{{item.name}}</span>
            </div>
            <div class="item-cart-row-right">
              <span class="item_cart_price">prezzo ad unità: @{{item.price}}€</span>
            </div>
          </div>

          <div class="cart_costs">

            <button class="reset_cart" @click='reset_cart()'>
              Svuota carrello
            </button>

            <div class="total">
              <span>Totale</span>
              <span>@{{total}}€</span>
            </div>

            </div>

        </div>

      </div>

    </div>


    <script src="{{ asset('/js/app.js')}}" charset="utf-8"></script>
  </body>
</html>
