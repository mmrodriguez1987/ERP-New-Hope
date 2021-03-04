export default {
    state: {
        loading: false,
        userLogged: false,    
        showRegisterModal: false,
        userProfile: [],
    },
    actions: {
        login(context, payload) {
            return new Promise((resolve, reject) => {
                context.state.loading = true
                axios.get('/sanctum/csrf-cookie').then(response => {
                    axios.post('api/login', payload)
                    .then(response => {
                        context.state.loading = false
                        context.commit('login', response.data)                        
                        Vue.toasted.show( response.data.message, {
                            icon: 'pencil',
                            type: 'info'
                        })
                        resolve(response)
                    }).catch(error => {
                        console.log(error)                        
                        context.state.loading = false
                        reject(error)
                    });
                }).catch(error => {                    
                    console.log(error)
                    reject(error)
                });
            })
        },

        register(context, payload) {
            return new Promise((resolve, reject) => {
                context.state.loading = true
                axios.post('api/register', payload)
                .then(response => {
                    context.commit('register', response.data)
                    context.state.loading = false
                    resolve(response)
                })
                .catch(error => {
                    Vue.toasted.show('This email is already taken by another account, please login or use another email.', {
                        icon: 'exclamation-triangle',
                        type: 'error'
                    })
                    context.state.loading = false
                    reject(error)
                })
            })
        },

        updateAccount(context, payload) {
            return new Promise((resolve, reject) => {
                context.state.loading = true
                axios.put('/api/user/' + payload.id, payload)
                    .then(response => {
                        context.commit('updateAccount', response.data)
                        context.state.loading = false
                        resolve(response)
                    })
                    .catch(error => {
                        console.log(error)
                        context.state.loading = false
                        reject(error)
                    })
            })
        },
        logout(context) {
            return new Promise((resolve, reject) => {
                context.state.loading = true
                axios.post('/logout')
                    .then(response => {
                        context.state.loading = false
                        context.commit('logout', response.data.data)
                        resolve(response)
                    })
                    .catch(error => {
                        context.state.loading = false
                        reject(error)
                    })
            })

        },      
        setShowRegisterModal(context, payload) {
            context.commit('setShowRegisterModal', payload)
        },
        getLoggedUser(context) {
            return new Promise((resolve, reject) => {
                axios.get('api/loggedUser')
                    .then(response => {
                        context.commit('getLoggedUser', response.data)
                        resolve(response)
                    })
                    .catch(error => {
                        console.log(error)
                        reject(error)
                    })

            })
        }

    },
    mutations: {
        login(state, data) {
            state.userLogged = true
            Vue.set(state, 'userProfile', data)
        },
        logout(state) {
            state.userLogged = false
            Vue.set(state, 'guest', false)
            location.reload();
        },
        register(state) {
            state.loading = false
            location.reload()
        }
    },
    getters: {
        getShowRegisterModal(state) {
            return state.showRegisterModal
        },
        isAuthenticated(state) {
            return state.userLogged
        },
        getUserProfile() {
            return state.userProfile
        }
    }

}
