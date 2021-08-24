<template>
  <div>
    <Header active_class="login" />
    <responsive-nav />
    <LoginForm />
    <Footer />
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
import Header from "../../components/Header"
import ResponsiveNav from "../../components/ResponsiveNav"
import LoginForm from "../../components/LoginForm"
import Footer from '../../components/Footer'
export default {
  components:{
    Header,
    ResponsiveNav,
    LoginForm,
    Footer
  },
  metaInfo () {
    return { title: this.$t('home') }
  },

  data: () => ({
    title: window.config.appName
  }),

  computed: mapGetters({
    authenticated: 'auth/check'
  })
}
</script>

<style scoped>

</style>
