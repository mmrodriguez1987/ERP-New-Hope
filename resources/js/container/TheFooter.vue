<template>
  <CFooter :fixed="false">
    <div>
      <a href="https://nhcrm.newhopeinchrist.church" target="_blank">NH ERP</a>
      <span class="ml-1">&copy; {{new Date().getFullYear()}}New Hope In Christ Ministry.</span>
    </div>
    <div class="ml-auto">
      <span class="mr-1" target="_blank">Powered by</span>
      <a href="https://mrkdev.pro">Marcos Rodriguez</a>
    </div>
  </CFooter>
</template>

<script>
export default {
  name: 'TheFooter'
}
</script>
