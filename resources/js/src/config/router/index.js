import Vue from 'vue'
import VueRouter from 'vue-router'
import routes from '../../routes'


Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})

router.beforeEach((to, from, next) => {
    const userDataString = localStorage.getItem('userData')
    if (to.matched.some(record => record.meta.requiresAuth)) {
        if (userDataString == null) {
            next({
                path: '/welcome',
                params: { nextUrl: to.fullPath }
            })
        } else {
            const userData = JSON.parse(userDataString)
            if (!to.meta.access.includes(userData.role)) {
                location.reload()
            }
            next()
        }
    }
    next()
})
export default router