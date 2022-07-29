require('./bootstrap')
import App from './App.vue'
import { createApp } from 'vue'


import router from './router'
import store from './store'

import CoreuiVue from '@coreui/vue-pro'
import CIcon from '@coreui/icons-vue'
import { iconsSet as icons } from './assets/icons.js'
import Notifications from '@kyvg/vue3-notification'
import { VueReCaptcha } from 'vue-recaptcha-v3'

const app = createApp(App)

app.use(store)
app.use(router)
app.use(CoreuiVue)
app.use(Notifications)
Vue.use(VueReCaptcha, { siteKey: process.env.MIX_INVISIBLE_RECAPTCHA_SITEKEY })

app.provide('icons', icons)
app.component('CIcon', CIcon)

app.mount('#app')