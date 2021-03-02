require('./bootstrap')

import router from './router'
import store from './store'
import {
    iconsSet as icons
} from './icons/icons.js'

window.Event = new Vue

//3rd vue components
require('./vendor_components')

//Own App components
require('./vue_components')

//Functions Utilities & Filters
require('./utilities.js')


window.moment = require('moment');

new Vue({
  el: '#app', 
  icons,
  router,
  store
})
