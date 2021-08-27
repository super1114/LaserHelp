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
    return { title: this.$t('Become an Expert') }
  },

  data: () => ({
    title: window.config.appName,
  }),

  computed: mapGetters({
    authenticated: 'auth/check'
  }),
  async beforeMount(){
    
  },
  async created(){
    
  },
  methods:{
    becomeExpert(){
        let user_id = this.$store.state.auth.user.user.id;
        if(typeof user_id!="undefined"){
            this.$store.dispatch("expert/become_expert",{id:user_id})
        }
    }
  }
}
</script>

<style scoped>
  .content-wrapper {
    background: #f8f7f5;
  }
</style>
