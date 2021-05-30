import Auth from '../layouts/pages/auth/Auth.vue'

import Home from '../layouts/pages/home/Home.vue'
import ContactManagement from '../layouts/pages/contact-management/ContactManagement'
import ContactHistory from '../layouts/pages/contact-history/ContactHistory'
import FollowUp from '../layouts/pages/follow-up/FollowUp'


const routes = [
    {
        path: '/',
        name: 'home',
        component: Home,
        meta: {
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
            navBarTitle: 'Contact Management',
            onNavbar: true,
        }
    },
    {
        path: '/follow-up',
        name: 'follow-up',
        component: FollowUp,
        meta: {
            guest: true,
            navBarTitle: 'Follow Up Customer',
            onNavbar: true,

        }
    },
    {
        path: '/history',
        name: 'history',
        component: ContactHistory,
        meta: {
            guest: true,
            navBarTitle: 'Contact History',
            onNavbar: true,

        }
    },
]
export default routes