<template>
  <AppSidebar />
  <div class="wrapper d-flex flex-column min-vh-100 bg-light dark:bg-transparent" >
    <AppHeader />
    <div class="body flex-grow-1 px-3">
      <CContainer lg>
        <router-view />
      </CContainer>
    </div>
    <AppFooter />
  </div>
  <AppAside />
</template>
<script>
import { CContainer } from '@coreui/vue-pro'
import AppAside from '../components/AppAside.vue'
import AppFooter from '../components/AppFooter.vue'
import AppHeader from '../components/AppHeader.vue'
import AppSidebar from '../components/AppSidebar.vue'


export default {
  name: 'DefaultLayout',
  components: {
    AppAside,
    AppFooter,
    AppHeader,
    AppSidebar,
    CContainer,
  },
}
</script>
