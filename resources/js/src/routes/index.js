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
            navBarTitle: 'Contact Management'
        }
    },
    {
        path: '/follow-up',
        name: 'follow-up',
        component: FollowUp,
        meta: {
            guest: true,
            navBarTitle: 'Follow Up Customer'
        }
    },
    {
        path: '/history',
        name: 'history',
        component: ContactHistory,
        meta: {
            guest: true,
            navBarTitle: 'Contact History'
        }
    },
]
export default routes