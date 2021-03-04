import Vue from 'vue'
import Router from 'vue-router'
import store from '../store'
import TheContainer from '../container/TheContainer.vue'
import Dashboard from '../components/Dashboard.vue'
//import Person from '../components/person/Index.vue'
//import Position from '../components/position/Index.vue'
import Profession from '../components/profession/Index.vue'
//import PersonType from '../components/person_type/Index.vue'
import Login from '../components/auth/Login.vue'
import Register from '../components/auth/Register.vue'
import Page404 from '../components/pages/404.vue'
import Page500 from '../components/pages/500.vue'

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
            component: Login 
        },{ 
            path: '/register',
            name: 'register',   
            component: Register
        },{ 
            path: '*',
            name: 'Page404',    
            component: Page404 
        },{ 
            path: '/500',    
            name: 'Page500',    
            component: Page500 
        },{ 
            path: '/admin/',         
            component: TheContainer,
            meta: {
                middlewareAuth: true
            },
            children: [{
                path: 'dashboard',
                name: 'Dashboard',
                component: Dashboard,
                meta: { middlewareAuth: true }
            },{
                path: 'professions',
                name: 'Professions',
                component: Profession,
                meta: {
                    middlewareAuth: true
                }
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
