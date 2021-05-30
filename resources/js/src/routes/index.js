import Auth from '../layouts/pages/auth/Auth.vue'

import Home from '../layouts/pages/home/Home.vue'
import ContactHistory from '../layouts/pages/contact-history/ContactHistory'
import CustomerList from '../layouts/pages/customer-list/CustomerList'


const routes = [
    {
        path: '/',
        name: 'home',
        component: Home,
        meta: {
            requiresAuth: true,
            access: ['admin', 'agent']

        }
    },
    {
        path: '/welcome',
        name: 'welcome',
        component: Auth,
        meta: {

        }
    },
    {
        path: '/contact',
        name: 'contact',
        component: CustomerList,
        meta: {
            requiresAuth: true,
            navBarTitle: 'Contact Management',
            onNavbar: true,
            access: ['admin']
        }
    },
    {
        path: '/follow-up',
        name: 'follow-up',
        component: CustomerList,
        meta: {
            requiresAuth: true,
            navBarTitle: 'Follow Up Customer',
            onNavbar: true,
            access: ['agent']
        }
    },
    {
        path: '/history',
        name: 'history',
        component: ContactHistory,
        meta: {
            requiresAuth: true,
            navBarTitle: 'Contact History',
            onNavbar: true,
            access: ['admin', 'agent']
        }
    },
]
export default routes