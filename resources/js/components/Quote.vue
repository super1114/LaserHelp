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
                                <div class="col-sm-12 col-md-12">
                                    <input type="text" class="form-control" placeholder="Paste a link to your loom recordig here" name="loom" id="loom" />
                                </div>
                                
                                <div class="col-sm-12 col-md-12">
                                    <textarea name="question" placeholder="How can we help?" class="form-control" id="question" rows="7"></textarea>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <span style="color: #2EB67D; cursor: pointer;" class="heading_small" id="attach_file">Attach file</span>
                                </div>
                                <input type="file" name="file" id="file" style="display: none;">
                                <input type="text" name="categories" id="categories" style="display: none;">
                                <div class="col-sm-12 col-md-12">
                                    <span style="color: #fff; cursor: pointer;" class="heading_small" id="selected_files"></span>
                                </div>
                                <div class="col-sm-12 col-md-12 text-center">
                                    <span class="heading_small">Select all niches that apply</span>
                                </div>
                                <div class="col-sm-12 col-md-12 mt-2 niches_container" style="display:flex;">
                                    <button type="button" class="niche" data-id="1">VFX</button>
                                    <button type="button" class="niche" data-id="2">Code</button>
                                    <button type="button" class="niche" data-id="3">Programming</button>
                                    <button type="button" class="niche" data-id="4">Blender</button>
                                    <button type="button" class="niche" data-id="5">After Effect</button>
                                    <button type="button" class="niche" data-id="6">Photoshop</button>
                                </div>
                                <div class="col-sm-4 col-md-4"></div>
                                <div class="col-sm-4 col-md-6 mt-4">
                                    <input type="submit" class="button" value="Submit Question" id="submit_btn" />
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
    name:"Quote"
}
</script>

<style>

</style>