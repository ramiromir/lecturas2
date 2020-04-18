import TodasLlamadas from './components/TodasLlamadas.vue';
import RegistraLlamada from './components/RegistrarLlamada.vue';
import ActualizarRegistro from './components/ActualizarRegistro.vue';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: TodasLlamadas
    },
    {
        name: 'add',
        path: '/add',
        component: RegistraLlamada
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: ActualizarRegistro
    }
];