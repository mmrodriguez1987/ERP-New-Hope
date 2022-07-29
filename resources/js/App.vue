<template>
  <router-view />
</template>
<script>
import { watch } from 'vue'
import { useStore } from 'vuex'

export default {
  setup() {
    const store = useStore()

    watch(store.state, () => {
      store.state.theme === 'dark'
        ? document.body.classList.add('dark-theme')
        : document.body.classList.remove('dark-theme')
    })

    store.state.theme === 'dark'
      ? document.body.classList.add('dark-theme')
      : document.body.classList.remove('dark-theme')
  },
}
</script>

<style lang="scss">
// Import Main styles for this application
@import 'styles/style';
</style>
