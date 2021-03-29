<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="/css/app.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.6/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body>

    <div id="app">

      @foreach ($products as $index => $product)
        @if ($index == 0)
          {{-- <div class="product">
          <h1>{{$product -> id}}</h1>
          <h3>{{$product -> name}}</h3>
          <h3>{{$product -> price}}</h3>
          <p>{{$product -> details}}</p>
          <p>{{$product -> description}}</p>
          <img src="storage/product_photo/{{$product -> photo}}" alt="">
          <br>
        </div> --}}
          <product
          :product_data= '{{$product}}'
          >
          </product>
        @endif
        {{-- <div class="product">
        <h1>{{$product -> id}}</h1>
        <h3>{{$product -> name}}</h3>
        <h3>{{$product -> price}}</h3>
        <p>{{$product -> details}}</p>
        <p>{{$product -> description}}</p>
        <img src="storage/product_photo/{{$product -> photo}}" alt="">
        <br>
        </div> --}}
      @endforeach
    </div>


    <script src="js/app.js" charset="utf-8"></script>
  </body>
</html>
