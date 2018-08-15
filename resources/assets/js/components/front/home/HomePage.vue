<template>
    <front-base>
        <!--Start of slider section-->
        <section id="slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="slider_overlay">
                            <img src="img/img1.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    <h3>Sumber Daya Genetik & Unit Benih</h3><br>
                                    <p >Awalnya, koleksi genebank AVRDC hanya membahas kebutuhan khusus pemulia tanaman. Berangsur-angsur tumbuh menjadi koleksi multi guna untuk penelitian dan pengembangan di tingkat global. Sejumlah besar spesies sayuran (438) yang sekarang termasuk dalam koleksi genebank AVRDC memungkinkan kita tidak hanya untuk melestarikan, mengeksplorasi dan memanfaatkan keanekaragaman hayati sayuran, tetapi juga berkontribusi terhadap diversifikasi sistem produksi sayuran dan pola konsumsi di negara berkembang.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of item With Active-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img2.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    <h3>Menjaga Penyimpanan Tetap Aman</h3><br>
                                    <p >Fasilitas penyimpanan benih baru selesai pada tahun 2010 untuk menyediakan lingkungan penyimpanan yang aman untuk koleksi plasma nutfah AVRDC yang luas. Lantai fasilitas lebih ditinggikan di atas tanah untuk melindungi dari banjir dan bencana alam lainnya. Pusat menyimpulkan pengaturan kotak hitam untuk cadangan keselamatan dari plasma nutfah yang paling berharga dengan Nordic Genetic Resource Center di Norwegia dan bank gen dari National Agrobiodiversity Center of the Rural Development Administration (RDA) di Korea Selatan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="img/img3.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    <h3>Karakterisasi Plasma Nutfah</h3><br>
                                    <p >Benih dalam penyimpanan akan habis seiring waktu. Maka sangat penting dalam penyimpanan benih diisi ulang untuk memastikan kelanjutan konservasi bahan plasma nutfah dan distribusinya kepada pengguna di seluruh dunia. Program regenerasi AVRDC bertujuan untuk memaksimalkan produksi benih, meminimalkan siklus regenerasi, menjaga integritas genetik populasi dan memaksimalkan kualitas benih.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of item-->
                </div>
                <!--End of Carousel Inner-->
            </div>
        </section>
        <!--end of slider section-->

        
        <!--Start of welcome section-->
        <section id="welcome">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wel_header">
                            <h2 class="wow bounce" data-wow-delay="0.2s">selamat datang di bank plasma nutfah</h2><br>
                            <p id="trans" class="wow fadeInUp" data-wow-delay="0.2s">Bank Plasma Nutfah adalah sistem informasi yang mengelola data semua plasma nutfah sayuran yang disimpan di bank gen AVRDC. Sumber Daya Genetik dan Unit Benih menggunakan sistem ini untuk mengelola operasional genebank secara efisien. AVGRIS menghubungkan semua operasi konservasi dan manajemen plasma nutfah, mulai dari pendaftaran, karakterisasi, evaluasi dan inventarisasi benih hingga distribusi benih hingga pengguna akhir.
                            AVGRIS menyediakan akses langsung pengguna ke data plasma nutfah melalui internet.
                            Penggunaan sistem ini GRATIS tetapi mohon dibaca terlebih dahulu<span><a :href="url('/terms')">persyaratan pengguna (terms of use).</a></span></p>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list media-body wow fadeIn" data-wow-delay="0.3s">
                                    <div class="welcome_icon">
                                        <i class="fa fa-user"></i>
                                    </div><br>
                                    <!-- <h4>eco system</h4> -->
                                    <p>Membantu staf GRSU dalam kegiatan sehari-hari.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list media-body wow fadeIn" data-wow-delay="0.5s">
                                    <div class="welcome_icon">
                                        <i class="fa fa-database"></i>
                                    </div><br>
                                    <!-- <h4>recycling</h4> -->
                                    <p>Memudahkan perekaman, penyimpanan dan pemeliharaan data plasma nutfah.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list media-body wow fadeIn" data-wow-delay="0.7s">
                                    <div class="welcome_icon">
                                        <i class="fa fa-file-text-o"></i>
                                    </div><br>
                                    <!-- <h4>water refine</h4> -->
                                    <p>Menyediakan akses langsung ke informasi yang berkaitan dengan aksesi di bank gen.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list media-body wow fadeIn" data-wow-delay="0.9s">
                                    <div class="welcome_icon">
                                        <i class="fa fa-leaf"></i>
                                    </div><br>
                                    <!-- <h4>solar system</h4> -->
                                    <p>Memungkinkan permintaan untuk benih yang diinginkan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--end of welcome section-->
    </front-base>
</template>

<script>
import FrontBase from '../FrontBase';

export default {

  name: 'HomePage',

  data () {
    return {

    }
  },
  components: {
    FrontBase,
  }
}
</script>

<style lang="css" scoped>
</style>
