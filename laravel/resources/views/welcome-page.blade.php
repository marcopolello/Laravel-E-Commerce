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

      <div class="products-container">

        @foreach ($products as $index => $product)

            <div class="product-cont">

              <product
              :route= '@json(route("product-show", $product -> id))'
              :product_data= '{{$product}}'
              >
              </product>

            </div>


        @endforeach

        {{-- per fronterd poteri fare una riga che scorre a dx e una a sx --}}

        {{-- @foreach ($products as $index => $product)

          <product
          :product_data= '{{$product}}'
          >
        </product>

        @endforeach --}}

      </div>

    </div>


    <script src="{{ asset('/js/app.js')}}" charset="utf-8"></script>
  </body>
</html>
