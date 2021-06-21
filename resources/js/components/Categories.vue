<template lang="es">
    <div>
        <ul class="navbar-nav">
            <li v-for="(category, index) in categories" :key="index" class="nav-item">
                <router-link :to="category.route" class="nav-link">  {{ category.name   }} </router-link>
            </li>
                       
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            categories: [
                {
                    name: "Inicio",
                    route: "/"
                },
                {
                    name: "Matriculas",
                    route: "/matriculas"
                },
                {
                    name: "Padres",
                    route: "/padres"
                },
                {
                    name: "Alumnos",
                    route: "/alumnos"
                },
                {
                    name: "Pagos",
                    route: "/pagos",
                },
                {
                    name: "Profesores",
                    route: "/profesores"
                }
            ]
        };
    }
};
</script>
<style lang="css"></style>
