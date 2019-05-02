import Vue from 'vue'
import App from './App.vue'
import BootstrapVue from 'bootstrap-vue'
import Vuelidate from 'vuelidate'

Vue.use(BootstrapVue);
Vue.use(Vuelidate);
new Vue({
  el: '#app',
  render: h => h(App)
})
