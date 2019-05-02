<template>
    <div class="content">
        <div class="container" >
            <div class="card-title">
                <h3 v-html="$attrs.duomenys.title"></h3>
            </div>
            <div class="card-content" >
                <p v-html="$attrs.duomenys.description"></p>
            </div>
        </div>
    </div>
</template>

<script>
  import data from '../data/data'
    export default {
        name: "Section",
    }
</script>

<style scoped lang="scss">
    .content {
        color: #ddd;
        background-color: #282E34;
        padding: 50px 0;
        text-align: justify;
        margin-bottom: 150px;
    }
    .card-title{
        @include font($font-regular, $whitesmoke, 20px);
        letter-spacing: 5px;
    }
    .card-content{
       @extend .card-title;
        font-size: 15px;
        letter-spacing: 2px;
    }
</style>
