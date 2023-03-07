<template>
  <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
    <CContainer>
      <CRow class="justify-content-center">
        <CCol :md="8">
          <CCardGroup>
            <CCard class="p-4">
              <CCardHeader>              
                <CImage fluid align="center" src="/images/nh-logo.png"  alt="New Hope Logo" />
              </CCardHeader>
              <CCardBody>
                <CForm @submit.prevent="login()">
                  <h1>Login</h1>
                  <p class="text-medium-emphasis">Sign In to your account</p>
                  <CInputGroup class="mb-3">
                    <CInputGroupText>
                      <CIcon icon="cil-user" />
                    </CInputGroupText>
                    <CFormInput placeholder="Username" autocomplete="username" v-model="userCredential.email" />
                  </CInputGroup>
                  <CInputGroup class="mb-4">
                    <CInputGroupText>
                      <CIcon icon="cil-lock-locked" />
                    </CInputGroupText>
                    <CFormInput type="password" placeholder="Password" autocomplete="current-password" v-model="userCredential.password" />
                  </CInputGroup>
                  <CRow>
                    <CCol :xs="6">
                      <CButton @click="recaptcha" color="primary" class="px-4" type="submit"> Login </CButton>
                    </CCol>
                    <CCol :xs="6" class="text-right">
                      <CButton color="link" class="px-0">
                        Forgot password?
                      </CButton>
                    </CCol>
                  </CRow>
                </CForm>
              </CCardBody>
            </CCard> 
            <CCard class="text-white bg-primary py-5" style="width: 44%">
              <CCardBody class="text-center">
                <div>
                  <h2>Sign up</h2>
                  <p>Please sign up!</p>
                  <CButton color="light" variant="outline" class="mt-3">
                    Register Now!
                  </CButton>
                </div>
              </CCardBody>
            </CCard>                   
          </CCardGroup>
        </CCol>
      </CRow>
    </CContainer>
  </div>
</template>
<script>
import { useReCaptcha } from 'vue-recaptcha-v3'
export default {
  setup() {
    const { executeRecaptcha, recaptchaLoaded } = useReCaptcha()
    const recaptcha = async () => {
      await recaptchaLoaded()
      const token = await executeRecaptcha('login')
      console.log({ token })
    }
    return {
      recaptcha
    }
  },
	data(){
		return{
			userCredential:{
        email:'',
        password:''
      },
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
		login(){
			this.$store.dispatch('login', this.userCredential)
				.then(response => {
					this.$router.push('/admin/dashboard')
					location.reload()
				})
		}
	}
}
</script>
