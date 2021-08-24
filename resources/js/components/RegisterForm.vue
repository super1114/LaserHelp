<template>
    <div class="register_form_wrap">
        <div class="layer">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-lg-3"></div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="qoute">
                            <div class="heading_wrap" style="margin-bottom: 10px;">
                                <h2 class="heading_a">Register</h2>
                            </div>
                            <form action="" method="post" id="login_form" class="row mt-4">
                                <div class="col-sm-12 col-md-12">
                                    <input type="text" class="form-control" placeholder="Username" name="username" />
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <input type="text" class="form-control" placeholder="Email" name="email" />
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <input type="text" class="form-control" placeholder="Password" name="password" />
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <input type="text" class="form-control" placeholder="Confirm Password" name="conf_password" />
                                </div>
                                <div class="col-sm-4 col-md-3"></div>
                                <div class="col-sm-4 col-md-6 mt-4">
                                    <button type="button c_green" class="button"  style="width:100%">Register</button>
                                </div>
                                
                                <div class="col-sm-12 col-md-12 mt-4 text-center">
                                    <span class="heading_small">Already sign up?</span>
                                    <router-link :to="{name:'login'}" class="heading_small">Login here</router-link>
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
    name:"RegisterForm"
}
</script>

<style>

</style>
                           