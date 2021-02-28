<template>
  <CContainer class="d-flex align-items-center min-vh-100">
    <CRow>
      <CCol>
        <CCardGroup>
          <CCard class="p-4">
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
                    <CButton type="submit" color="primary" class="px-4" :disabled="validForm"  >Login</CButton>
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
          <CCard color="primary" text-color="white" class="text-center py-5 d-md-down-none" body-wrapper >
            <h2>Sign up</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <CButton color="primary" class="active mt-3" @click="goRegister()" >
              Register Now!
            </CButton>
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
				this.$router.push('/dashboard')			
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













// export default {
//     components: { VueRecaptcha },
//     data() {
//       return {
//         username: '',
//         password: '',
//         sitekey: process.env.MIX_INVISIBLE_RECAPTCHA_SITEKEY,
//         badge: process.env.MIX_INVISIBLE_RECAPTCHA_BADGE,
//       }
//     },

//     methods: {
//         onVerify: function (response) {
//             let data = {
//                 username: this.username,
//                 password: this.password
//             };

//             if (this.password.length > 0 && this.password.length) {
//                 //Initialize CSRF protection for the application
//                 axios.get('/sanctum/csrf-cookie').then(response => {
//                     axios.post('api/login', {

//                     })
//                 });
//             }

//             // axios.post('/sanctum/csrf-cookie', data)
//             //     .then(({data}) => {
//             //         auth.login(data.username, data.password);
//             //         Vue.toasted.show('Welcome '+ data.user.name, {icon: 'pencil', type: 'info'})
//             //         this.$router.push('/dashboard');
//             //     })
//             //     .catch( error => {
//             //     console.log(error.data);
//             //     Vue.toasted.show(error.message, {icon: 'exclamation-triangle', type: 'error'})
//             // });

//     	},

//         sendToken: function () {
//             this.$refs.invisibleRecaptcha.execute()
//         },

//         onExpired: function () {
//             console.log('Captcha Expired')
// 		},

//         resetRecaptcha () {
//             this.$refs.invisibleRecaptcha.reset()
// 		},
//     }
// }
</script>
