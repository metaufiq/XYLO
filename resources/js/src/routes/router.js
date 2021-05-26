import Auth from '../layouts/pages/auth/Auth.vue'

import Home from '../layouts/pages/home/Home.vue'
const routes = [
    {
        path: '/',
        name: 'home',
        component: Home,
        meta: {
            // requiresAuth: true,
            guest: true,
        }
    },
    {
        path: '/welcome',
        name: 'welcome',
        component: Auth,
        meta: {
            guest: true,
        }
    },
]
export default routes