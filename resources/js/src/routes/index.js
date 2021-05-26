import Auth from '../layouts/pages/auth/Auth.vue'

import Home from '../layouts/pages/home/Home.vue'
import ContactManagement from '../layouts/pages/contact-management/ContactManagement'
import ContactHistory from '../layouts/pages/contact-history/ContactHistory'


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
    {
        path: '/contact',
        name: 'contact',
        component: ContactManagement,
        meta: {
            guest: true,
        }
    },
    {
        path: '/history',
        name: 'history',
        component: ContactHistory,
        meta: {
            guest: true,
        }
    },
]
export default routes