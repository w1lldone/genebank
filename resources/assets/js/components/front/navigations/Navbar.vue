<template>
    <section id="header">
        <div class="header-area">
            <div class="header_menu text-center" data-spy="affix" data-offset-top="50" id="nav">
                <div class="container">
                    <nav class="navbar navbar-default zero_mp ">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand custom_navbar-brand" :href="env.baseUrl"><img :src="url('img/logo.png')" alt=""></a>
                        </div>
                        <!--End of navbar-header-->

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse zero_mp menu " id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right main_menu clearfix">
                                <li><a href="/">Home</a></li>
                                <li><a href="#">search</a>
                                    <ul class="sub-menu">
                                        <li><a href="/search/passport">Passport</a></li>
                                        <li><a href="char.html">Characterization</a></li>
                                        <li><a href="eval.html">Evaluation</a></li>
                                    </ul>
                                </li>
                                <li><a href="/news">news</a></li>
                                <li><a href="/gallery">gallery</a></li>
                                <li><a href="/download">download</a></li>
                                <li><a href="/terms">terms of use</a></li>
                                <li><a href="/about">about us</a></li>
                            </ul>
                            
                        </div>
                        <!-- /.navbar-collapse -->
                    </nav>
                    <!--End of nav-->
                </div>
                <!--End of container-->
            </div>
            <!--End of header menu-->
        </div>
        <!--end of header area-->
    </section>
    <!--End of Hedaer Section-->
</template>

<script>
export default {

  name: 'Navbar',

  data () {
    return {

    }
  }
}
</script>

<style lang="css" scoped>
</style>
