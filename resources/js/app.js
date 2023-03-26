require('./bootstrap')
import App from './App.vue'
import { createApp } from 'vue'

import router from './router'
import store from './store'

import CoreuiVue from '@coreui/vue-pro'
import CIcon from '@coreui/icons-vue'
import Toast from "vue-toastification";
import "vue-toastification/dist/index.css";
import { CFormInput  } from '@coreui/vue'
import { iconsSet as icons } from './assets/icons'
import { VueReCaptcha } from 'vue-recaptcha-v3'

const app = createApp(App)

app.use(router)
app.use(store)
app.use(CoreuiVue)

const options = {
    pauseOnHover: true,
    position: "top-right",
    timeout: 7000,
    newestOnTop: true
};

app.use(Toast, options);

app.use(VueReCaptcha, {
    siteKey: process.env.MIX_INVISIBLE_RECAPTCHA_SITEKEY,
    badge: process.env.MIX_INVISIBLE_RECAPTCHA_BADGE
})

app.provide('icons', icons)
app.component('CIcon', CIcon)

app.component('CFormInput ', CFormInput )
app.mount('#app')