<template>
    <header>
        <div class="header_bottom home1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3 col-xs-12">
                        <div class="logo">
                            <a href=""><img src="../assets/images/logo.png" style="height: 70px;padding:5px;"></a>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-9 col-lg-9 text-right">
                        <nav>
                            <ul>
                                <li>
                                    <router-link :to="{name: ''}" class="active">Submit a Question</router-link>
                                </li>
                                <li >
                                    <router-link :to="{name: 'expert'}">Become a LaserHelp Expert</router-link>
                                </li>
                                <li >
                                    <a href="" class="">Logout</a>
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
    name:'Header'
}
</script>

<style>

</style>