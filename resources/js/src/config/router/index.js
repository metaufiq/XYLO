import Vue from 'vue'
import VueRouter from 'vue-router'
import routes from '../../routes/router'


Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})

router.beforeEach((to, from, next) => {
    if (to.matched.some(record => record.meta.requiresAuth)) {
        if (localStorage.getItem('jwt') == null) {
            next({
                path: '/welcome',
                params: { nextUrl: to.fullPath }
            })
        } else {
            let user = JSON.parse(localStorage.getItem('user'))
            if (to.matched.some(record => record.meta.isAdmin)) {
                if (user.isAdmin) {
                    next()
                }
                else {
                    next({ name: 'home' })
                }
            } else {
                next()
            }
        }
    } else if (to.matched.some(record => record.meta.guest)) {
        if (localStorage.getItem('jwt') == null) {
            next()

        }
        else {
            next({ name: 'home' })
        }
    } else {
        next()
    }
})
export default router