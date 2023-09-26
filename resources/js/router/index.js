import { h, resolveComponent } from 'vue'
import { createRouter, createWebHashHistory } from 'vue-router'

import DefaultLayout from '../layouts/DefaultLayout.vue'

const routes = [{
    path: '/login',
    name: 'login',
    component: () =>
        import ('../views/admin/auth/Login.vue')
}, {
    path: '/register',
    name: 'register',
    component: () =>
        import ('../views/admin/auth/Register.vue')
}, {
    path: '*',
    name: 'Page404',
    component: () =>
        import ('../views/admin/pages/404.vue')
}, {
    path: '/500',
    name: 'Page500',
    component: () =>
        import ('../views/admin/pages/500.vue')
}, {
    path: '/admin/',
    name: 'Home',
    component: DefaultLayout,
    meta: {
        middlewareAuth: true
    },
    redirect: '/dashboard',
    children: [{
        path: '/dashboard',
        name: 'Dashboard',
        component: () =>
            import ('../views/admin/Dashboard.vue'),
        meta: { middlewareAuth: true },
    }, {
        path: '/admin',
        name: 'Website Management',
        meta: { middlewareAuth: true },
        component: {
            render() {
                return h(resolveComponent('router-view'))
            },
        },
        redirect: '/admin/persons',
        children: [{
                path: '/admin/persons',
                name: 'Persons',
                meta: { middlewareAuth: true },
                component: () =>
                    import ('../views/admin/persons/Index.vue'),

            },
            {
                path: '/admin/professions',
                name: 'Breadcrumbs',
                meta: { middlewareAuth: true },
                component: () =>
                    import ('../views/admin/profession/Index.vue'),
            },
            {
                path: '/base/cards',
                name: 'Cards',
                meta: { middlewareAuth: true },
                component: () =>
                    import ('../views/admin/base/Cards.vue'),
            },
        ],
    }, ],
}, ]

const router = createRouter({
    history: createWebHashHistory(process.env.APP_URL),
    routes,
    scrollBehavior() {
        // always scroll to top
        return { top: 0 }
    },
})

export default router