<template>
  <div class="content-wrapper">
    <Header active_class='myaccount'/>
    <responsive-nav />
    <div class="questions_layer">
      
    </div>
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
    Footer
  },
  metaInfo () {
    return { title: this.$t('My Account') }
  },

  data: () => ({
    title: window.config.appName,
  }),

  computed: mapGetters({
    authenticated: 'auth/check'
  }),
  async created(){
    await this.$store.dispatch("myquestions/fetchQuestions");
    this.questions = this.$store.state.myquestions.questions;
  }
}
</script>

<style scoped>
  .content-wrapper {
    background: #f8f7f5;
  }
</style>
