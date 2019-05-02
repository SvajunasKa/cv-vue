<template>
  <div class="contacts">
    <div class="container">
      <div class="contact-title">
        <form @submit.prevent="submit">
          <div class="input-group">
            <label for="name">Name</label>
            <input type="text" id="name" v-model="contacts.name" name="name"/>
          </div>
          <div class="input-group">
            <label for="email">Email</label>
            <input type="text" id="email" v-model="contacts.email" name="email"/>
          </div>
          <div class="input-group">
            <label for="message">Message</label>
            <textarea id="message" v-model="contacts.message" name="message"></textarea>
          </div>
          <div class="input-group">
            <button type="submit" class="btn">Send</button>
          </div>
          <div class="responce">
            <p  v-html="responseText"></p>
          </div>
          <div class="error">
            <p v-html="error"></p>
          </div>

        </form>
      </div>
    </div>
  </div>

</template>

<script>
  import axios from 'axios'
  import {required, email} from 'vuelidate/lib/validators'

  export default {
    name: "Contacts",
    data() {
      return {
        contacts: {},
        responseText: '',
        error: ''
      }
    },
    validations: {
      email: {
        required,
        email
      }
    },
    methods: {
      submit() {
        axios.post('mailer.php', {
          data: {
            'name': this.contacts.name,
            'email': this.contacts.email,
            'message': this.contacts.message,
          }
        })
          .then(res => {
            this.responseText = res.data;
            this.error = "";
            this.$data.contacts = {}
          })
          .catch(e => {
            this.error = e.response.data;
          });
      }
    }
  }
</script>

<style scoped lang="scss">
  .contacts {
    color: #ddd;
    background-color: #282E34;
    padding: 50px 0;
  }
  .input-group {
    margin-bottom: 20px;
  }
  label {
    display: block;
    @include font($font-regular, $whitesmoke, 15px);
    letter-spacing: 2px;
  }
  input {
    height: 40px;
    width: 100%;
    padding: 0.5em 0.5em;
    font-size: 15px;
    border-radius: 3px;
    border: 1px solid $gray;
  }
  textarea {
    @extend input;
    width: 100%;
    height: 200px;
  }
  .btn {
    background: white;
    width: 200px;
    padding: 5px;
    @include font($font-default, $light-black, 20px);
    border: none;
    cursor: pointer;
    transition: 0.5s ease-in-out;
  }
  .responce{
    display: block;
    @include font($font-regular, $whitesmoke, 15px);
    margin-top: 15px;
  }
  .error{
    @extend .responce;
    color: red;
  }

</style>
