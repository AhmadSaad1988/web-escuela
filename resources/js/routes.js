
import VueRouter from 'vue-router'
import Vue from 'vue'
import Home from './components/views/Home.vue'
import Matriculas from './components/views/Matriculas.vue'
import Padres from './components/views/Padres.vue'
import Alumnos from './components/views/Alumnos.vue'
import Pagos from './components/views/Pagos.vue'
import Profesores from './components/views/Profesores.vue'
import Grupos from './components/views/Grupos.vue'

Vue.use(VueRouter);

const router = new VueRouter({
    routes: [
        {
            path: "/",
            component: Home
        },
        {
            path: "/matriculas",
            component: Matriculas
        },
        {
            path: "/padres",
            component: Padres
        },
        {
            path: "/alumnos",
            component: Alumnos
        },
        {
            path: "/pagos",
            component: Pagos
        },
        {
            path: "/profesores",
            component: Profesores
        },
        {
            path: "/grupos",
            component: Grupos
        }
    ]

})
export default router