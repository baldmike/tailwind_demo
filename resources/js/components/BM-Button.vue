<template>
    <div class="flex items-stretch">
        <button class="w-40 m-5 p-2 bg-blue-200 text-black text-center 
    rounded-full border border-black hover:bg-green-500 hover:text-white focus:outline-none">
        <p>submit</p>
    </button>

    <button class="w-40 m-5 p-2 bg-blue-200 text-black text-center 
    rounded-full border border-black hover:bg-red-600 hover:text-white focus:outline-none">
        <p>cancel</p>
    </button>
    </div>
</template>

<script>
    export default {
        name: "bm-button"
    }
</script>