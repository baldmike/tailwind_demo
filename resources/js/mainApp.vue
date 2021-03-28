<template> 
    <div class="container">
        <router-view/>
    </div>
    
</template>

<script>
import BmButton from './components/BM-Button.vue'

    export default {
        name: "mainApp",

        components: {
            BmButton
        },

        data() {
            return {
                funky: false,
            }
        },

        methods: {
            funkyTime() {
                this.funky = !this.funky;
                console.log(this.funky);
            }
        }
    }
</script>