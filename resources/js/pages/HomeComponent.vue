<template>
    <div>
        <bm-button v-if="showSubmit" @click="submit" ref="submitButton">Submit</bm-button>

        <bm-button v-if="!showSubmit" @click="submit" ref="submitButton">Submit</bm-button>

        <bm-button v-if="submitted" @click="doStuff">Submitted</bm-button>

        <bm-button v-if="toggleOn" @click="toggleButton">Toggle On</bm-button>
        <bm-button v-if="!toggleOn" @click="toggleButton">Toggle Off</bm-button>
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
                toggleOn: true,
                showSubmit: true,
                submitted: false,
            }
        },

        methods: {
            toggleButton() {
                this.toggleOn = !this.toggleOn;
                console.log(this.toggleOn);
            },
            submit() {
                //calling the startLoading method of the button, which enables the button to loading state
                this.$refs.submitButton.startLoading();
                this.submitted = !this.submitted;
            },

            doStuff() {
                this.showSubmit = !this.showSubmit;
                this.toggleButton();
            }
        }
}
</script>