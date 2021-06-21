<template>
    <div>
        <nav-bar></nav-bar>
        <formulario></formulario>
    </div>
</template>

<script>
import Formulario from '../Formulario.vue';
import NavBar from "../NavBar.vue";
export default {
    components: { NavBar, Formulario }
};
</script>

<style scoped></style>
