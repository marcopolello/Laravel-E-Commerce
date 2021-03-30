<template>
    <div class="product">
      <div class="con-cards-1 con-cards card">
        <!-- <div class="con-star">
            <i class='bx bx-star'></i>
        </div> -->
        <a :href="route">
          <div class="con-image">
            <img class="img" :src="'storage/product_photo/' + this.photo" alt="">
            <img class="bg" :src="'storage/product_photo/' + this.photo" alt="">
          </div>
        </a>

        <div class="con-text">
            <h3>
                {{this.nameAbbr}}
            </h3>
            <p>
                {{this.name}}
            </p>
        </div>

        <div class="con-price">
            {{this.price}} €
        </div>

        <div class="con-btn">

            <Button @click="handleAdd"  class="add">
                Add to cart
            </Button>

            <div class="con-input-btns">
                <Button @click="plusLess('less')" class="less">
                    <i class='bx bx-minus' ></i>
                </Button>
                <input v-model="quantity" type="text">
                <Button @click="plusLess('plus')" class="plus">
                    <i class='bx bx-plus'></i>
                </Button>
            </div>

            <div class="con-input-btns down">
              <Button @click="close()" class="close">
                <i class='bx bxs-x-circle' ></i>
              </Button>
              <Button @click="emitInCart()" class="check">
                  <i class='bx bxs-check-circle'></i>
              </Button>
            </div>
        </div>
      </div>
    </div>
</template>

<script>
    export default {
      data: function() {
       return {
         'name': this.product_data.name,
         'slug': this.product_data.slug,
         'details': this.product_data.details,
         'price': this.product_data.price,
         'description': this.product_data.description,
         'photo': this.product_data.photo,
         'id': this.product_data.id,
         'nameAbbr': '',
         // rotta x lo show
         // 'route': '/product/' + this.product_data.id,

         // mi serve un contatore x la quantità
         'quantity': 0,
         'product': {},
        };
      },

      computed: {

      },

      created() {

      },

      mounted() {
          // console.log(this.product_data, this.route);
          if (this.name.length > 15) {
            this.nameAbbr = this.name.slice(0,15) + "..";
          } else {
            this.nameAbbr = this.name;
          }
      },

      props: {
        product_data : Object,
        route: String,
      },

      watch: {

      },

      methods: {
        emitInCart: function () {
          if (this.quantity) {

          }
          let product = {};
          for (let i = 0; i < this.quantity; i++) {

            product = {
              "id": this.id,
              "price" : this.price,
              "name": this.name,
              "slug": this.slug,
              "details": this.details,
              "description": this.description,
              "photo": this.photo,
              "quantity": this.quantity,
            };
            // manda al padre un oggetto con dati del prodotto
            this.$emit('carrello', product);
            // logggg
            console.log(product, this.quantity);
          }
        },
        close: function () {
          const card = event.target.closest('.card')
          card.classList.remove('add-active')
        },
        handleAdd : function () {
          const card = event.target.closest('.card')
          card.classList.add('add-active')
          // console.log(card)
          this.quantity++;
        },
        plusLess: function (type) {
          const card = event.target.closest('.card')
          const input = card.querySelector('input')
          let oldVal = Number(input.value)
          if (type == 'less') {
              if (oldVal == 1) {
                  card.classList.remove('add-active')
                  this.quantity = 0;
                  this.product = {};
                  console.log(this.quantity);
                  return
              }
              input.value = oldVal -= 1
              this.quantity--;
              console.log(this.quantity);
          } else {
              input.value = oldVal += 1
              this.quantity++;
              console.log(this.quantity);
          }
        },

      },

    }
</script>
