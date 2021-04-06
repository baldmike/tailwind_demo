<template>
    <div>
        <bm-button v-if="!toggleOn" @click="submit" ref="submitButton">Toggle</bm-button>
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
                toggleOn: false,
            }
        },

        methods: {
            toggleButton() {
                this.toggleOn = !this.toggleOn;
                console.log(this.toggleOn);
            },
            submit() {
                //calling the startLoading method of the button, which enables the button to loading state
                console.log("submit--->>>");
                this.$refs.submitButton.startLoading();
            }
        }
}
</script>