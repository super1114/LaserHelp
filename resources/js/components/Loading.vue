<template>
  <div v-show="loading" class="preloader"></div>
</template>

<script>
export default {
  data: () => ({
    loading:true
  }),

  methods: {
    start(){
      this.loading = true;
      //console.log("started loading")
    },
    finish(){
      this.loading = false;
      //console.log("finished loading");
    }
  }
}
</script>

<style >
</style>
