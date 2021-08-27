<template>
    <header>
        <div class="header_bottom home1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3 col-xs-12">
                        <div class="logo">
                            <router-link :to="{name: 'welcome'}"><img src="../assets/images/logo.png" style="height: 70px;padding:5px;"></router-link>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-9 col-lg-9 text-right">
                        <nav>
                            <ul v-if="user==null">
                                <li>
                                    <router-link :to="{name: 'welcome'}" :class="[active_class=='question'?'active':'']">Submit a Question</router-link>
                                </li>
                                <li >
                                    <router-link :to="{name: 'expert'}" :class="[active_class=='expert'?'active':'']">Become an Expert</router-link>
                                </li>
                                <li >
                                    <router-link :to="{name: 'login'}" :class="[active_class=='login'?'active':'']">Login</router-link>
                                </li>
                            </ul>
                            <ul v-else>
                                <li>
                                    <router-link :to="{name: 'welcome'}" :class="[active_class=='question'?'active':'']">Submit a Question</router-link>
                                </li>
                                <li >
                                    <router-link :to="{name: 'myaccount'}" :class="[active_class=='myaccount'?'active':'']">My Account</router-link>
                                </li>
                                <li >
                                    <router-link :to="{name: 'myquestions'}" :class="[active_class=='myquestions'?'active':'']">My Questions</router-link>
                                </li>
                                <li v-if="user.expert==0">
                                    <router-link :to="{name: 'expert'}" :class="[active_class=='expert'?'active':'']">Become an Expert</router-link>
                                </li>
                                <li v-if="user.expert==1">
                                    <router-link :to="{name: 'get_clients'}" :class="[active_class=='get_clients'?'active':'']">Get Clients</router-link>
                                </li>
                                <li v-if="user.expert==1">
                                    <router-link :to="{name: 'help_clients'}" :class="[active_class=='help_clients'?'active':'']">Help your clients</router-link>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
export default {
    name:'Header',
    props:{
        active_class:String
    },
    data(){
        return {
            user:this.$store.state.auth.user.user
        }
    },
    created(){
        console.log(this.user);
    }
}
</script>

<style>
    header {
        background: white;
    }
</style>