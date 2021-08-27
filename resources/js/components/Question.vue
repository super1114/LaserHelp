<template>
  <div class="question_item">
    <div v-if="!noquetion">
        <div class="question_content">
            {{question.question}}    
        </div> 
        <div class="question_below">
            <a class="question_loom" target="_blank" :href="question.loom">
                Loom screen capture link
            </a>
            <a v-if="question.attached_file" class="question_files" target="_blank" :href="'/api/download/'+question.id">
                Attached files
            </a>
        </div>
    </div>
    <div v-else>
        <div class="question_content text-center">
            No questions yet    
        </div> 
    </div>
  </div>
</template>

<script>
export default {
    name:"Question",
    data(){
        return {
            
        }
    },
    props:{
        question:Object,
        noquetion:false
    }
}
</script>

<style>

</style>