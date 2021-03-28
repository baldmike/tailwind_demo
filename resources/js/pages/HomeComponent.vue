<template>
    <div class="w-20 border-black">
        <bm-button v-if="!funky" @click.native.prevent="funkyTime()">Toggle Off</bm-button>

        <bm-button v-if="funky" @click.native.prevent="funkyTime()">Toggle On</bm-button>
    </div>
</template>

<script>
    import BmButton from '../components/BM-Button.vue'
    export default {
        
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