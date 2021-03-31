require('./bootstrap');

import Vue from 'vue'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

Vue.use(BootstrapVue);

window.Vue = require('vue');

const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

const app = new Vue({
    el: '#app',
    mounted: function () {
     this.$nextTick(function () {
       // console.log("App montata!");
     })},
    data: {
        products: [],
        cart: [],
        categorySelected: '',
    },
    computed: {
      // evitare che lo stesso prodotto vewnga stampato più volte
      cart_new: function() {

        let newCart = [];
        this.cart.forEach((product, i) => {
          // console.log(product);
          newCart.push(
            {
              "id": product.id,
              "price" : product.price,
              "name": product.name,
              "slug": product.slug,
              "details": product.details,
              "description": product.description,
              "photo": product.photo,
            }
          );
        });
        console.log(newCart);
        return newCart;
      },

    },

    watch: {

    },
    methods: {

      pushInCart: function(product) {
        this.cart.push(product);
        // LOGGGG
        // console.log(this.cart);
      },

      reset_cart: function() {
        this.cart = [];
        this.cart_new = [];
      },


      remove_plate: function(plate){

        let plate_index = -1;
        this.cart.forEach((item, i) => {
          if (item.plate_id == plate.plate_id) {
            plate_index = i;
          }
        });
        if (plate_index > -1) {
          this.$delete(this.cart, plate_index);
        }
        // console.log(this.cart_new);
        this.$forceUpdate();
      },

      add_plate: function(plate){
        // console.log(plate);
        let newPlate = {
          "plate_id": plate.plate_id,
          "original_price": plate.original_price,
          "plate_price": plate.original_price,
          "plate_name": plate.plate_name,
          "delivery_cost": plate.delivery_cost,
        };
        // console.log(newPlate);
        this.cart.push(newPlate);
        this.$forceUpdate();
      },

    },
});



// scroll cards
const next = document.querySelector('#next')
const prev = document.querySelector('#prev')

function handleScrollNext (direction) {
    const cards = document.querySelector('.con-cards')
    cards.scrollLeft = cards.scrollLeft += window.innerWidth / 2 > 600 ? window.innerWidth / 2 : window.innerWidth - 100
}
function handleScrollPrev (direction) {
    const cards = document.querySelector('.con-cards')
    cards.scrollLeft = cards.scrollLeft -= window.innerWidth / 2 > 600 ? window.innerWidth / 2 : window.innerWidth - 100
}

next.addEventListener('click', handleScrollNext)
prev.addEventListener('click', handleScrollPrev)
