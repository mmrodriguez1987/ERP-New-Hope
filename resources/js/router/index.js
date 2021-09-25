import Vue from 'vue'
import Router from 'vue-router'
import store from '../store'

window.Vue = Vue

Vue.use(Router)

let router = new Router({
    mode: 'history',
    history: true,
    scrollBehavior: () => ({
        y: 0
    }),
    routes: [
        { 
            path: '/login',   
            name: 'login',      
            component: () => import('../components/auth/Login.vue') 
        },{ 
            path: '/register',
            name: 'register',   
            component: () => import('../components/auth/Register.vue')
        },{ 
            path: '*',
            name: 'Page404',    
            component: () => import('../components/pages/404.vue') 
        },{ 
            path: '/500',    
            name: 'Page500',    
            component: () => import('../components/pages/500.vue') 
        },{ 
            path: '/admin/',         
            component: () => import('../container/TheContainer.vue'),
            meta: { middlewareAuth: true },
            children: [{
                path: 'dashboard',
                name: 'Dashboard',
                component: () => import('../components/Dashboard.vue'),
                meta: { middlewareAuth: true }
            },{
                path: 'professions',
                name: 'Professions',
                component: () => import('../components/profession/Index.vue'),
                meta: { middlewareAuth: true }
            }]
        }
        
    ]
})

router.beforeEach((to, from, next) => {
    if (to.matched.some(record => record.meta.middlewareAuth)) {      
        if (!store.getters.isAuthenticated) {
            next({
                path: '/login',
                query: {
                    redirect: to.fullPath
                }
            });
            return;
        }
    }
    next();
})

export default router
