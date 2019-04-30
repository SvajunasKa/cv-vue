<template>
    <div class="content">
        <div class="container">
            <div class="card-title">
                <h3>Sveiki, mano vardas Svajūnas</h3>
            </div>
            <div class="card-content">
                <p>Esu Kauno informacinių technologijų mokyklos, žiniatinklio programuotojo specialybės mokinys. Moku HTML,
                    CSS, turiu JavaScript ir PhP programavimo pradmenis. Noriu pagilinti esamas žinias ir įgauti naujų
                    įgūdžių darbe prie realių projektų, todėl kreipiuosi dėl galimybės atlikti praktiką Jūsų įmonėje. Esu
                    atsakingas, žingeidus, komunikabilus, sugebu dirbti komandoje ir individualiai. Nebijau naujovių,
                    iššūkių ir pokyčių. Dėl šių asmeninių savybių ir besikeičiančių darbo rinkos poreikių nusprendžiau
                    keisti elektros inžinieriaus kvalifikaciją į žiniatinklio programuotojo.
                </p>
            </div>


        </div>
    </div>
</template>

<script>
    export default {
        name: "Section"
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