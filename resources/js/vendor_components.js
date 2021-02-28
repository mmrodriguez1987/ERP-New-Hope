import BootstrapVue from 'bootstrap-vue'
import _ from 'lodash'
import Toasted from 'vue-toasted'
import vSelect from 'vue-select'
import CoreuiVue from '@coreui/vue'
import {
    iconsSet as icons
} from './icons/icons.js'


//*Bootstrap Vue
Vue.use(BootstrapVue)
Vue.use(CoreuiVue)
Vue.use(icons)
Vue.use(Toasted, {
    duration: 10000,
    iconPack: 'fontawesome',
    theme: 'outline'
})
Vue.use(require('vue-moment'))

Vue.component('v-select', vSelect)
