<template>
    <navbar></navbar>
    <router-view></router-view>
</template>

<script>
import Navbar from "@/components/Navbar.vue";

export default {
    components: {Navbar},
    setup() {
        return {}
    }
}
</script>

<style lang="scss">
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    max-width: 1100px;
    margin: 0 auto;
}
</style>
