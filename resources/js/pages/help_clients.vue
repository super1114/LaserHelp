<template>
  <div class="content-wrapper">
    <Header active_class='help_clients'/>
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
import Footer from '../components/Footer'
export default {
  components:{
    Header,
    ResponsiveNav,
    Footer
  },
  metaInfo () {
    return { title: this.$t('Help Clients') }
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
  }
}
</script>

<style scoped>
  .content-wrapper {
    background: #f8f7f5;
  }
</style>
