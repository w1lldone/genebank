<template>
    <section id="header" data-spy="scroll" data-target="#header" >
        <div class="header-area">
            <div class="header_menu text-center" data-spy="affix" id="nav">
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
                            <a class="navbar-brand custom_navbar-brand" :href="url('/')"><img :src="url('/img/logo1.png?v1')" alt=""></a>
                        </div>
                        <!--End of navbar-header-->

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse zero_mp menu" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right main_menu clearfix">
                                <li><a :href="url('/')">Beranda</a></li>
                                <li><a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Telusur</a>
                                    <ul class="sub-menu dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li><a :href="url('/search/passport')">Paspor</a></li>
                                        <li><a :href="url('/search/characterization')">Karakterisasi</a></li>
                                        <li><a :href="url('/search/evaluation')">Evaluasi</a></li>
                                    </ul>
                                </li>
                                <li><a :href="url('/news')">Berita</a></li>
                                <li><a :href="url('/gallery')">Galeri</a></li>
                                <li><a :href="url('/download')">Unduh</a></li>
                                <li><a :href="url('/terms')">Syarat & Ketentuan</a></li>
                                <li><a :href="url('/about')">Tentang Kami</a></li>
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
