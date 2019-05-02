<template>
    <div>
        <app-modal @inputData="getName"></app-modal>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-Lg-12 col-md-12">
                        <div class="text-center" >
                          Hi,{{this.childData}} ! <br>
                            nice to meet you <br>
                            how is weather in {{this.city}} ?
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</template>

<script>
    import Modal from './subComponents/Modal'
    import axios from 'axios'
    export default {
        name: "Section",
        data(){
            return{
                childData: "",
                city: ""
            }
        },
        methods:{
            getName(variable) {
                this.childData= variable;
            },
            getLocation(){
                axios.get(' http://ip-api.com/json')
                    .then(res => {
                        this.city = res.data.city
                    })
            }
        },
        mounted(){
            this.getLocation()
        },
        components:{
            appModal: Modal
        }
    }
</script>

<style scoped lang="scss">
        .content{
            background-color: $gray-darker;
            background-image: url("../assets/images/hand.png");
            height: 100vh;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            align-items: center;
            background-position: center;
            background-attachment: fixed;
        }
        .text-center{
            @include font($font-regular,$black, 30px);
        }
</style>
