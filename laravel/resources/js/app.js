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
       // this.update();
     })},
    data: {
        products: [],
        cart: [],
        categorySelected: 'tutti',
        categories: [],
    },
    computed: {
      // evitare che lo stesso prodotto vewnga stampato più volte
      cart_new: function() {

        let newCart = [];
        this.cart.forEach((product, i) => {
          // console.log(this.cart);
          let counter = 0;
          // console.log(product);

          this.cart.forEach((product_confronto, i) => {
            if (product.id == product_confronto.id) {
              counter ++;
            }
          });

          if (!newCart.some(product_new_cart => product_new_cart.id == product.id)) {

              newCart.push(
                {
                  "id": product.id,
                  "price" : product.price,
                  "total_price" : (parseFloat(counter) * parseFloat(product.price)).toFixed(2),
                  "name": product.name,
                  "slug": product.slug,
                  "details": product.details,
                  "description": product.description,
                  "photo": product.photo,
                  "quantity": counter,
                }
              );
            }
        });
        // console.log(newCart);
        return newCart;
      },
      total: function() {

          let total = 0;
          for (let i = 0; i < this.cart_new.length; i++) {
            total += parseFloat(this.cart_new[i].total_price);
          }
          return total.toFixed(2);
        }
    },

    watch: {

    },
    methods: {

      // metodi per debuggare

      showCart: function() {
        console.log(this.cart);
      },
      update: function() {
        axios.get('')
        .then(response => {
          ;
        }) ;
      },

      pushInCart: function(product) {
        this.cart.push(product);
        // LOGGGG
        // console.log(this.cart);
      },

      reset_cart: function() {
        this.cart = [];
        this.cart_new = [];
      },


      remove_product: function(product){

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

      add_product: function(product){
        // console.log(plate);
        let newProduct = {
          "plate_id": plate.plate_id,
          "original_price": plate.original_price,
          "plate_price": plate.original_price,
          "plate_name": plate.plate_name,
          "delivery_cost": plate.delivery_cost,
        };
        // console.log(newProduct);
        this.cart.push(newProduct);
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
