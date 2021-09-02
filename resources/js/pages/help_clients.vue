<template>
  <div class="content-wrapper">
    <Header active_class='help_clients'/>
    <responsive-nav />
    <div class="help_clients_layer" >
      <div class="container sharebuttons">
        <button class="button b_blue" @click="shareScreen">{{this.text}}</button>
        <button class="button b_blue">Give Remote Access</button>
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
    return { title: this.$t('Help Clients') }
  },

  data: () => ({
    title: window.config.appName,
    text: "Share Screen"
  }),

  computed: mapGetters({
    authenticated: 'auth/check'
  }),
  async beforeMount(){
    
  },
  async created(){
    
  },
  methods:{
    shareScreen(e) {
      if(this.text=="Share Screen"){
        this.text = "Stop Sharing";
        e.target.classList.remove("b_blue");
        e.target.classList.add("b_red");
      } else {
        this.text="Share Screen"
        e.target.classList.remove("b_red");
        e.target.classList.add("b_blue");
      }
    }
  }
}
</script>

<style scoped>
  .content-wrapper {
    background: #f8f7f5;
  }
  .help_clients_layer {
    height: 800px;
    padding: 300px;
  }
</style>
