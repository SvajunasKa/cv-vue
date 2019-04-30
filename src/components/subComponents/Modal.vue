<template>
    <div>
        <div class="modal fade">

            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                            Hi, please enter your name
                    </div>
                    <div class="modal-body">
                         <input type="text" v-model="name" @keyup.enter="close">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn" @click="close">Come in</button>
                    </div>
                </div>

            </div>

        </div>
    </div>
</template>

<script>

    export default {
        name: "Modal",
        data() {
            return {
                name: ''
            }
        },
        methods: {
            close() {
                let modal = document.querySelector('.fade');
                modal.classList.add('remove');
                modal.classList.remove('active');
                this.$emit("inputData", this.name);
                this.name = "";
            },
        },
        mounted() {
            let modal = document.querySelector('.fade');
            window.addEventListener('load', () => {
                modal.classList.add('show');
                modal.classList.add('active');

            })
        }
    }
</script>

<style scoped lang="scss">
    .active {
        display: block !important;
        animation: fade-in 1s;
    }
    .remove {
        animation: fade-out 3s reverse;
    }
    .modal {
        background-color: rgba(0, 0, 0, 0.8);

    }
    .modal-header {
        border-bottom: none;
        justify-content: center;
        @include font($font-default, $light-black, 20px);
    }
    .modal-body {
        display: flex;
        justify-content: center;
        input {
            padding: 5px 15px;
            border: 1px solid $gray;
            border-radius: 3px;
            width: 250px;
            color: #212529;
        }
    }
    .modal-footer {
        border-top: none;
        display: flex;
        justify-content: center;
        .btn {
            background: white;
            width: 200px;
            padding: 5px;
            @include font($font-default, $light-black, 20px);
            border: none;
            cursor: pointer;
            transition: 0.5s ease-in-out;
            &:hover {
                box-shadow: 3px 3px 3px 4px $gray-darker;
                transition: 0.5s ease-in-out;
            }
        }
    }
    @keyframes fade-in {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }
    @keyframes fade-out {
        100% {
            opacity: 1;
        }
        0% {
            opacity: 0;
        }
    }

</style>