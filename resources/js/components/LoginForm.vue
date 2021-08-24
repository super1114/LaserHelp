<template>
    <div class="login_form_wrap">
        <div class="layer">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-lg-3"></div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="qoute">
                            <div class="heading_wrap" style="margin-bottom: 10px;">
                                <h2 class="heading_a">Login</h2>
                            </div>
                            <form action="" method="post" id="login_form" class="row mt-4">
                                <div class="col-sm-12 col-md-12">
                                    <input type="text" class="form-control" placeholder="Username" name="username" />
                                </div>
                                
                                <div class="col-sm-12 col-md-12">
                                    <input type="text" class="form-control" placeholder="Password" name="loom" />
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <span style="color: #2EB67D; cursor: pointer;" class="heading_small" id="attach_file">Attach file</span>
                                </div>
                                
                                <div class="col-sm-4 col-md-3"></div>
                                <div class="col-sm-4 col-md-6 mt-4">
                                    <button type="button c_green" class="button"  style="width:100%">Login</button>
                                </div>
                                <div class="col-sm-12 col-md-12 mt-4 text-center">
                                    <span class="heading_small">Not a member?</span>
                                    <router-link :to="{name:'register'}" class="heading_small">Sign up now</router-link>
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
    name:"LoginForm"
}
</script>

<style>

</style>