<template>
    <div class="product-cont">
      <div class="con-cards-1 con-cards card">
        <!-- <div class="con-star">
            <i class='bx bx-star'></i>
        </div> -->
        <div class="con-image">
            <img class="img" :src="'storage/product_photo/' + this.photo" alt="">
            <img class="bg" :src="'storage/product_photo/' + this.photo" alt="">
        </div>

        <div class="con-text">
            <h3>
                {{this.name}}
            </h3>
            <p>
                {{this.name}}
            </p>
        </div>

        <div class="con-price">
            {{this.price}}
        </div>

        <div class="con-btn">

            <Button @click="handleAdd"  class="add">
                Add to cart
            </Button>

            <div class="con-input-btns">
                <Button @click="plusLess('less')" class="less">
                    <i class='bx bx-minus' ></i>
                </Button>
                <input value="1" type="text">
                <Button @click="plusLess('plus')" class="plus">
                    <i class='bx bx-plus'></i>
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
        };
      },

      computed: {

      },

      created() {

      },

      mounted() {
          console.log(this.product_data);
      },

      props: {
        product_data : Object,
      },

      watch: {

      },

      methods: {
        handleAdd : function () {
          const card = event.target.closest('.card')
          card.classList.add('add-active')
          console.log(card)
        },
        plusLess: function (type) {
          const card = event.target.closest('.card')
          const input = card.querySelector('input')
          let oldVal = Number(input.value)
          if (type == 'less') {
              if (oldVal == 1) {
                  card.classList.remove('add-active')
                  return
              }
              input.value = oldVal -= 1
          } else {
              input.value = oldVal += 1
          }
        }
      },

    }
</script>
