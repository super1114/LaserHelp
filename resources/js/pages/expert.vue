<template>
  <div class="content-wrapper">
    <Header active_class='expert'/>
    <responsive-nav />
    <div class="questions_layer">
        <div class="container">
            <button class="button" @click="becomeExpert">Become a laserhelp expert</button>
        </div>
      
    </div>
    <Footer />
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
import Header from "../components/Header"
import ResponsiveNav from "../components/ResponsiveNav"
import Footer from '../components/Footer'
export default {
  components:{
    Header,
    ResponsiveNav,
    Footer
  },
  metaInfo () {
    return { title: this.$t('home') }
  },

  data: () => ({
    title: window.config.appName,
    questions:[]
  }),

  computed: mapGetters({
    authenticated: 'auth/check'
  }),
  async beforeMount(){
    
  },
  async created(){
    await this.$store.dispatch("myquestions/fetchQuestions");
    this.questions = this.$store.state.myquestions.questions;
  },
  becomeExpert(){
      let user = this.$store.state.user;
  }
}
</script>

<style scoped>
  .content-wrapper {
    background: #f8f7f5;
  }
</style>
