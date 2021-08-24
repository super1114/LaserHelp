<template>
  <div>
  </div>
</template>

<script>
export default {
  middleware: 'auth',
  metaInfo () {
    return { title: this.$t('home') }
  }
}
</script>
