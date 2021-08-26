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
                            <div class="col-sm-12 col-md-12">
                                <input type="email" class="form-control" placeholder="Email" v-model="email" />
                            </div>
                            
                            <div class="col-sm-12 col-md-12">
                                <input type="password" class="form-control" placeholder="Password" v-model="password"/>
                            </div>
                            <div class="col-sm-12 col-md-12 mt-4">
                                <button type="button" class="button w-full small-btn" @click="login">Login</button>
                            </div>
                            <div class="col-sm-12 col-md-12 mt-4 text-center">
                                <span class="heading_small">Not a member?</span>
                                <router-link :to="{name:'register'}" class="heading_small">Sign up now</router-link>
                            </div>
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
    name:"LoginForm",
    data(){
        return{
            email:"",
            password:""
        }
    },
    methods:{
        login(){
            this.$store.dispatch("auth/loginUser",{
                email:this.email,
                password:this.password  
            })
        }
    }
}
</script>

<style>

</style>