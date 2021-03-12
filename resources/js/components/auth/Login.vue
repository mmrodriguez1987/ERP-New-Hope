<template>
  <CContainer class="d-flex align-items-center min-vh-100">
    <CRow>
      <CCol>
        <CCardGroup>
          <CCard class="p-4">
            <CCardHeader>              
              <img src="/images/nh-logo.png" class="img-fluid" alt="New Hope Logo">
            </CCardHeader>
            <CCardBody>
              <CForm @submit.prevent="sendToken" method="POST">
                <h1>Login</h1>
                <p class="text-muted">Sign In to your account</p>
                <CInput placeholder="Username" autocomplete="username email" v-model="userCredential.email" >
                  <template #prepend-content><CIcon name="cil-user"/></template>
                </CInput>
                <CInput placeholder="Password" type="password" autocomplete="curent-password"  v-model="userCredential.password">
                  <template #prepend-content><CIcon name="cil-lock-locked"/></template>
                </CInput>
                <CRow>
                  <CCol col="6" class="text-left">
                    <CButton type="submit" class="px-4 nh-background" :disabled="validForm"  >Login</CButton>
                  </CCol>
                  <CCol col="6" class="text-right">
                    <CButton color="link" class="px-0">Forgot password?</CButton>
                    <CButton color="link" class="d-md-none">Register now!</CButton>
                  </CCol>
                </CRow>
                <vue-recaptcha  ref="invisibleRecaptcha" @verify="onVerify" @expired="onExpired" size="invisible" :badge="badge" :sitekey="sitekey" :loadRecaptchaScript="true"></vue-recaptcha>
              </CForm>
            </CCardBody>
          </CCard>
          <CCard text-color="white" class="text-center py-5 d-md-down-none nh-background" body-wrapper >
              <h2>NH ERP System</h2>              
              <p>Sistema de Gestion tipo ERP para la planeacion de recursos empresariales de la Iglesia New Hope</p>
              <CButton class="active mt-3 nh-background-white" href="/register" >Register Now!</CButton>
              <atom-spinner :animation-duration="1000" :size="25" :color="'white'" class="pull-right" v-if="loading" />
          </CCard>
        </CCardGroup>
      </CCol>
    </CRow>
  </CContainer>
</template>
<script>
import VueRecaptcha from 'vue-recaptcha'
import {AtomSpinner} from 'epic-spinners'

export default{
  components: {
    AtomSpinner, VueRecaptcha
  },
	data(){
		return{
			userCredential:{
        email:'',
        password:''
      },			
      sitekey: process.env.MIX_INVISIBLE_RECAPTCHA_SITEKEY,
      badge: process.env.MIX_INVISIBLE_RECAPTCHA_BADGE,
		}
	},
	computed:{
		validForm(){
			return !this.userCredential.email ||  !this.userCredential.password
		},
		loading(){
			return this.$store.state.Auth.loading
		},
	},
	methods:{
		onVerify: function (response) {
			this.$store.dispatch('login', this.userCredential)
			.then(response => {
				this.$router.push('/admin/dashboard')			
			}).catch( response =>  {
        this.$router.push('/500')
      })     
		},
    sendToken: function () {
      this.$refs.invisibleRecaptcha.execute()
    },
    onExpired: function () {
      console.log('Captcha Expired')
 		},
    resetRecaptcha () {
      this.$refs.invisibleRecaptcha.reset()
 		}
	}
}
</script>
<style scoped>

</style>
