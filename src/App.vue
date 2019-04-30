<template>
  <div id="app">
    <app-section-main></app-section-main>
    <app-section></app-section>
  </div>

</template>

<script>
  import Section_main from './components/Section_main'
  import Section from './components/Section'
export default {
  name: 'app',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  },
    components: {
        appSectionMain: Section_main,
        appSection: Section
    }
}
</script>

<style lang="scss">
  #app{
    background-image: url("assets/images/2s.jpeg");
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
    background-attachment: fixed;
  }
</style>
