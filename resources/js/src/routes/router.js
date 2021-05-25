import Login from '../layouts/pages/auth/Login.vue'
import Register from '../layouts/pages/auth/Register.vue'

import Home from '../layouts/pages/home/Home.vue'
const routes = [
    {
        path: '/',
        name: 'home',
        component: Home,
        meta: {
            requiresAuth: true,
        }
    },
    {
        path: '/login',
        name: 'login',
        component: Login,
        meta: {
            guest: true,
        }
    },
    {
        path: '/register',
        name: 'register',
        component: Register,
        meta: {
            guest: true,
        }
    },
]
export default routes