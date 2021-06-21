<template>
    <div>
        <nav-bar></nav-bar>
        <table class="table container">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">الإسم</th>
                    <th scope="col">اللقب</th>
                </tr>
            </thead>

            <tbody>
                <tr v-for="(alumno, index) in alumnos" :key="index">
                    <td>{{ index }}</td>
                    <td>{{ alumno.name }}</td>
                    <td>{{ alumno.surname }}</td>
                    <td>{{ alumno.name_ar }}</td>
                    <td>{{ alumno.surname_ar }}</td>

                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import NavBar from "../NavBar.vue";
export default {
    components: { NavBar },
    name: "alumnos",
    data() {
        return {
            alumnos: []
        };
    },
    methods: {
        getAlumnos() {
            axios.get('api/alumnos').then(response => {
                this.alumnos = response.data.data
            });
        }
    },
    created() {
        this.getAlumnos();
    }
};
</script>

<style scoped></style>
