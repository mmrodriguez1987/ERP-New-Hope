<template>
  <CContainer class="d-flex align-items-center min-vh-100">
    <CRow class="justify-content-center">
      <CCol class="col-md-8">
        <CCardGroup>
          <CCard>
            <CCardHeader>              
              <CImg fluid align="center" src="/images/nh-logo.png"  alt="New Hope Logo" />
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
                    <CButton type="submit" class="btn btn-info px-4" :disabled="validForm"  >Login</CButton>
                  </CCol>
                  <CCol col="6" class="text-right">
                    <CButton color="link" class="px-0">Forgot password?</CButton>
                    <CButton color="link" class="d-md-none">Register now!</CButton>
                  </CCol>
                </CRow>
                <button @click="recaptcha">Execute recaptcha</button>
              </CForm>
            </CCardBody>
          </CCard> 
          <CCard color="info" text-color="white" class="text-center py-5 d-md-down-none" body-wrapper>
            <h2>Sign up</h2>
            <p>Todo usuario debe estar debidamente autorizado por el adminsitrador del sistema para poder ser dado de alta. Cualquier intento no autorizado de ingreso a la base de datos de la compania estara penalizado por las autoridades correspondientes.</p>
            <CButton  color="primary" class="active mt-3">
              Register Now!
            </CButton>
          </CCard>         
        </CCardGroup>
      </CCol>
    </CRow>
  </CContainer>
</template>
<script>
import { useReCaptcha } from 'vue-recaptcha-v3'


export default{
  components: {
     VueRecaptcha
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
        console.log(error)
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
