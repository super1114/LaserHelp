<template>
  <div>
    <Header active_class='myquestions'/>
    <responsive-nav />
    <quote />
    <Footer />
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
import Header from "../components/Header"
import ResponsiveNav from "../components/ResponsiveNav"
import Question from "../components/Question"
import Footer from '../components/Footer'
export default {
  components:{
    Header,
    ResponsiveNav,
    Question,
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
