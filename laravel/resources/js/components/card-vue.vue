<template>
    <div class="card" @click="clickOnCard">
        <h3>4.0</h3>
        <i class='bx bx-heart'></i>
        <div class="con-img">
            <img src="img/call_of_duty.png" alt="">
            <img class="blur" src="'img/' + images[i]" alt="">
        </div>
        <div class="con-text">
            <h2>
                Call Of Duty Warzone
            </h2>
            <p>
                <!-- text... -->
                Warzone features two primary game modes: Battle Royale and Plunder.The Battle Royale mode is similar to other titles in the genre where players compete in a continuously shrinking map to be the last player remaining.
            </p>
        </div>
    </div>
</template>

<script>
    export default {
      data: function() {
       return {
         images : [
           'call_of_duty.png',
           'assasin-creed.png'
         ],
         selectedItem: null,
         i: this.index,
        };
      },

      computed: {

        descrizione_short: function(){
          let descrizione = this.descrizione;
          if (descrizione.length > 100) {
            descrizione = descrizione.slice(0,97);
            descrizione += '...';
          }
          console.log(descrizione);
          return descrizione;
        },

      },

      mounted() {
          console.log('card mounted');
      },

      props: {
        index : Number,
      },

      watch: {
      },

      methods: {
        clickOnCard : function() {
          this.selectedItem = this.index;
          console.log(this.selectedItem);
        }
      },



    }
</script>
