<template>
  <div class="content-wrapper">
    <Header active_class='get_clients'/>
    <responsive-nav />
    <div class="questions_layer">
      <div v-if="questions.length>0" class="questions_container container">
        <Question2 v-for="question in questions" :key="question.id" :question="question"/>
      </div>
      <div v-else class="questions_container container">
        <Question2 :noquetion="true" />
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
import Question2 from "../components/Question2"
export default {
  components:{
    Header,
    ResponsiveNav,
    Footer,
    Question2
  },
  metaInfo () {
    return { title: this.$t('Get Clients') }
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
    await this.$store.dispatch("get_clients/fetchQuestions");
    this.questions = this.$store.state.get_clients.questions;
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
