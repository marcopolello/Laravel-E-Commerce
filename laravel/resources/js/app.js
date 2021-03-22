
require('./bootstrap');

window.Vue = require('vue');


Vue.component('example-component', require('./components/ExampleComponent.vue').default);


const app = new Vue({
    el: '#app',
    data: {
      showNavLat: false,
      div: "",
      contentMenu: true,
    },
    mounted: function () {
      return console.log("ehila sono VueJs");
    },
    methods: {
      toggleNavLat: function () {
        this.showNavLat = !this.showNavLat;
      },

    }
});
