<template>
  <div id="app">
    <app-section-main></app-section-main>
    <app-section v-for="item in data" :duomenys="item"></app-section>
   <app-contacts></app-contacts>
  </div>

</template>

<script>
  import Section_main from './components/Section_main'
  import Section from './components/Section'
  import Contacts from './components/Contacts'
  import data from './data/data'

  export default {
    name: 'app',
    data() {
      return {
        data: data.sections,
      }
    },
    props: ['duomenys'],
    components: {
      appSectionMain: Section_main,
      appSection: Section ,
      appContacts: Contacts
    }
  }
</script>

<style lang="scss">
  #app {
    background-image: url("assets/images/2s.jpeg");
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
    background-attachment: fixed;
  }
</style>
