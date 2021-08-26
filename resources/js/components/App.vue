<template>
  <div id="app" class="page-wrapper">
    <Loading ref="loading"/>
    <transition name="page" mode="out-in">
      <child />
    </transition>
  </div>
</template>

<script>
import Loading from './Loading'


export default {
  el: '#app',
  components: {
    Loading
  },

  metaInfo () {
    const { appName } = window.config
    
    return {
      title: appName,
      titleTemplate: `%s · ${appName}`
    }
  },

  mounted () {
    this.$loading = this.$refs.loading
  },
  async beforeMount(){
    await this.$store.dispatch("auth/fetchUser");
  },
  methods: {
    showAlert(msg){
      console.log(msg);
    }
  }
}
</script>

<style>
 @import '../assets/css/bootstrap.css';
 @import '../assets/css/font-awesome.css';
 @import '../assets/css/animate.css';
 @import '../assets/css/prettyPhoto.css';
 @import '../assets/css/style.css';
 @import '../assets/css/responsive.css';
 @import '../assets/css/custom.css';
</style>