<template>
    <div class="qoute_wrap animated entrance">
        <div class="layer">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-lg-2"></div>
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <div class="qoute">
                            <div class="heading_wrap" style="margin-bottom: 10px;">
                                <h2 class="heading_a">Get Instant Quote</h2>
                                <h5 class="heading_small">Use <a href="https://www.loom.com" target="_blank" style="color:#2EB67D">Loom</a> to screencapture your question</h5>
                            </div>
                            <form action="" method="post" id="queston_form" class="row">
                                <input type="file" ref="file" style="display:none" @change="fileChange" />
                                <div class="col-sm-12 col-md-12">
                                    <input type="text" class="form-control" placeholder="Paste a link to your loom recordig here" name="loom" v-model="loom" />
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <textarea name="question" placeholder="How can we help?" class="form-control" id="question" rows="7" v-model="question"></textarea>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <span style="color: #2EB67D; cursor: pointer;" class="heading_small" @click="attachFile">Attach file</span>
                                    <span style="color: #111;" class="heading_small float-right" v-bind:style="{margin:'0px', 'margin-right':'5px'}" >{{this.fileName}}</span>
                                </div>
                                <input type="text" name="categories" id="categories" style="display: none;">
                                <div class="col-sm-12 col-md-12 text-center">
                                    <span class="heading_small mt-4">Select all niches that apply</span>
                                </div>
                                <div class="col-sm-12 col-md-12 mt-2 niches_container" style="display:flex;">
                                    <button type="button" class="niche" data-id="1" @click="categoryClick">VFX</button>
                                    <button type="button" class="niche" data-id="2" @click="categoryClick">Code</button>
                                    <button type="button" class="niche" data-id="3" @click="categoryClick">Programming</button>
                                    <button type="button" class="niche" data-id="4" @click="categoryClick">Blender</button>
                                    <button type="button" class="niche" data-id="5" @click="categoryClick">After Effect</button>
                                    <button type="button" class="niche" data-id="6" @click="categoryClick">Photoshop</button>
                                </div>
                                <div class="col-sm-4 col-md-4"></div>
                                <div class="col-sm-4 col-md-6 mt-4">
                                    <button type="button" class="button small-btn" @click="submitQuestion">Submit Question</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-3"></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {  
    name:"Quote",
    data(){
        return {
            loom:"",
            question:"",
            fileName:"",
            categories:""
        }
    },
    methods:{
        fileChange(){
            this.fileName = this.$refs.file.files[0].name;
            this.$store.state.submit_question.file = this.$refs.file.files[0];
        },
        attachFile(){
            this.$refs.file.click();
        },
        submitQuestion(){
            this.$store.dispatch("submit_question/submitQuestion", {
                loom:this.loom,
                question:this.question,
                categories:this.categories,
                router : this.$router
            });
        },
        categoryClick(e) {
            let category = e.target.getAttribute("data-id");
            var arr = this.categories.split(",");
            if(arr.indexOf(category)==-1) {
                this.categories+=category+",";
                e.target.classList.add("active_niche");
            } else {
                arr.splice(arr.indexOf(category),1);
                this.categories = arr.join(",");
                e.target.classList.remove("active_niche");

            }
        }
    }
}
</script>

<style>

</style>