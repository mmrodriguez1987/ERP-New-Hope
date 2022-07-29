import { createStore } from 'vuex'

import Auth from './modules/auth.js'
import Profession from './modules/profession.js'

export default createStore({
    state: {
        asideVisible: false,
        sidebarVisible: '',
        sidebarUnfoldable: false,
        theme: 'default',
    },
    mutations: {
        toggleSidebarDesktop(state) {
            const sidebarOpened = [true, 'responsive'].includes(state.sidebarShow)
            state.sidebarShow = sidebarOpened ? false : 'responsive'
        },
        toggleSidebarMobile(state) {
            const sidebarClosed = [false, 'responsive'].includes(state.sidebarShow)
            state.sidebarShow = sidebarClosed ? true : 'responsive'
        },
        set(state, [variable, value]) {
            state[variable] = value
        },
        toggle(state, variable) {
            state[variable] = !state[variable]
        }

    },
    actions: {},
    modules: {
        Auth,
        Profession,
    },
});