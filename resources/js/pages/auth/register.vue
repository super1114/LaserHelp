<template>
  <div>
    <Header active_class="login" />
    <responsive-nav />
    <RegisterForm />
    <Footer />
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
import Header from "../../components/Header"
import ResponsiveNav from "../../components/ResponsiveNav"
import RegisterForm from "../../components/RegisterForm"
import Footer from '../../components/Footer'
export default {
  components:{
    Header,
    ResponsiveNav,
    RegisterForm,
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
