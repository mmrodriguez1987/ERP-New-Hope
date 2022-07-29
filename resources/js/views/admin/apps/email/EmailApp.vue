<template>
  <div>
    <EmailSidebar />
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <AppHeader />
      <div class="body flex-grow-1 px-3">
        <CContainer lg>
          <CCard class="mb-4">
            <CCardBody>
              <router-view />
            </CCardBody>
          </CCard>
        </CContainer>
      </div>
      <AppFooter />
    </div>
    <AppAside />
  </div>
</template>

<script>
import EmailSidebar from './EmailSidebar'
import AppHeader from '..../components/AppHeader'
import AppFooter from '..../components/AppFooter'
import AppAside from '..../components/AppAside'

export default {
  name: 'EmailApp',
  components: {
    EmailSidebar,
    AppHeader,
    AppFooter,
    AppAside,
  },
}
</script>
