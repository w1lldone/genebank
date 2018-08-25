<template>
    <div>
        <navbar></navbar>
        <slot></slot>
        <!--Start of footer-->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h5>Bank Sumber Daya Genetik Sayuran</h5>
                        <span>Supported by:</span>
                        <div class="">
                            <a href="http://www.panahmerah.id/"><img src="/img/PanahMerah.png" width="100"></a>
                            <br>
                            <a href="http://www.panahmerah.id/">PT East West Seed Indonesia</a>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <h5>Kontak</h5>
                        <span>
                            <a href="http://piat.ugm.ac.id" target="_blank">Pusat Inovasi Agroteknologi</a> <br>
                            Universitas Gadjah Mada <br>
                            Kalitirto, Berbah, Sleman, Yogyakarta 55573, Indonesia <br>
                            <i class="fa fa-envelope fa-fw"></i> <a href="mailto:piat@ugm.ac.id">piat@ugm.ac.id</a> <br>
                            <i class="fa fa-phone fa-fw"></i> +62 (274) 497717 <br>
                            <i class="fa fa-fax fa-fw"></i> +62 (274) 497717 <br>
                        </span>
                    </div>
                    <div class="col-md-3">
                        <h5>Navigasi</h5>
                        <a href="/about">Tentang Kami</a> <br>
                        <a href="/terms">Syarat dan Ketentuan</a> <br>
                        <a href="/download">Unduh</a> <br>
                        <a href="/gallery">Galeri</a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        &copy; 2018 <a href="http://www.panahmerah.id/">PT East West Seed Indonesia</a>. Developed by <a href="http://smartcity.wg.ugm.ac.id/" target="_blank">Smart System Research Group</a>.
                    </div>
                </div>
            </div>
        </footer>
        <!--End of footer-->
    </div>
</template>

<script>
import Navbar from './navigations/Navbar';

export default {

  name: 'FrontBase',

  data () {
    return {

    }
  },
  components: {
    Navbar
  }
}
</script>

<style lang="css" scoped>
 footer {
    background: #cacfd2;
    padding-top: 5rem;
    padding-bottom: 3rem;
 }

 hr {
    border-top-color: #a2a2a2;
 }

 h5 {
    margin-top: 2rem;
    margin-bottom: 1rem;
 }
</style>
