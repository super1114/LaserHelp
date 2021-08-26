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
                            <div class="col-sm-12 col-md-12">
                                <input type="text" class="form-control" placeholder="Username" name="username"  v-model="username"/>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <input type="text" class="form-control" placeholder="Email" name="email" v-model="email"/>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <input type="password" class="form-control" placeholder="Password" name="password" v-model="password"/>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <input type="password" class="form-control" placeholder="Confirm Password" name="conf_password" v-model="conf_password"/>
                            </div>
                            <StripePayCom />
                            <div class="col-sm-12 col-md-12 mt-4">
                                <button type="button" class="button small-btn w-full" @click="regUser">Register</button>
                            </div>
                            
                            <div class="col-sm-12 col-md-12 mt-4 text-center">
                                <span class="heading_small">Already sign up?</span>
                                <router-link :to="{name:'login'}" class="heading_small">Login here</router-link>
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
import StripePayCom from "./StripePayCom"
export default {
    name:"RegisterForm",
    components:{
        StripePayCom
    },
    data(){
        return {
            username:"",
            email:"",
            password:"",
            conf_password:""
        }
    },
    methods:{
        regUser(){
            this.$store.dispatch("auth/registerUser", {
                username:this.username,
                email:this.email,
                password:this.password  
            })
        }
    }
}
</script>

<style>

</style>
                           