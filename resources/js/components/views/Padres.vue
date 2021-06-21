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
                    <th scope="col">Teléfono</th>
                    <th scope="col">Matrícula</th>
                    <th scope="col">Descuento</th>
                    <th scope="col">Pagado</th>
                </tr>
            </thead>

            <tbody>
                <tr v-for="(padre, index) in padres" :key="index">
                    <td>{{ index }}</td>
                    <td>{{ padre.name }}</td>
                    <td>{{ padre.surname }}</td>
                    <td>{{ padre.name_ar }}</td>
                    <td>{{ padre.surname_ar }}</td>
                    <td>{{ padre.telefono }}</td>
                    <td>{{ padre.matricula }}</td>
                    <td>{{ padre.descuento }}</td>
                    <td>{{ }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import NavBar from "../NavBar.vue";
export default {
    components: { NavBar },
    name: "padres",
    data() {
        return {
            padres: []
        };
    },
    methods: {
        getPadres() {
            axios.get('api/padres').then(response => {
                this.padres = response.data.data
            });
        }
    },
    created() {
        this.getPadres();
    }
};
</script>

<style scoped></style>
