<template>
  <div class="question_item">
    <div v-if="!noquetion">
        <div class="question_header">
            <div class="question_user">
                {{ question.user.username }} submitted a Question
            </div>
            <div class="question_difftime">
                {{ question.difftime }}
            </div>
        </div> 
        <div class="question_small_content">
            {{ question.question }}
        </div>
        <div class="question_below">
            <a class="question_loom" target="_blank" :href="question.loom">
                Loom screen capture link
            </a>
            <div>
                <a v-if="question.attached_file" class="question_files" target="_blank" :href="'/api/download/'+question.id" style="margin-right:10px">
                    Attached files
                </a>
                <a class="button help-button">
                    Help now
                </a>
            </div>
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
    name:"Question2",
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