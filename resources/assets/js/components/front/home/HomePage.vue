<template>
    <front-base>
        <!--Start of slider section-->
        <section id="slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <!-- <li data-target="#carousel-example-generic" data-slide-to="2"></li> -->
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="slider_overlay">
                            <img src="/img/img2.jpeg?v=1" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    <h3>Sumber Daya Genetik Sayuran</h3><br>
                                    <p >Sumber Daya Genetik (SDG) adalah kekayaan alam yang sangat berharga, karakter karakter yang tersimpan dalam SDG merupakan potensi emas yang siap di explore untuk digunakan dalam menghasilkan varietas–varietas unggul masa depan.  </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of item With Active-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="/img/img3.jpg?v=1" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    <h3>Konversi dan Menyelamatkan Potensi Genetik Indonesia</h3><br>
                                    <p >Pembangunan Bank Sumber Daya Genetik Sayuran merupakan salah satu langkah untuk mengkonversi dan menyelamatkan potensi genetik Indonesia dari ancaman erosi genetik yang mencapai 75%. Kerjasama antar stakeholder sangat dibutuhkan untuk melestarikan dan memanfaatkana SDG yang dikelola Bank SDG sayuran ini.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Item-->
                    <!-- <div class="item">
                        <div class="slider_overlay">
                            <img src="/img/img3.jpg?v=1" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    <h3>Karakterisasi Plasma Nutfah</h3><br>
                                    <p >Benih dalam penyimpanan akan habis seiring waktu. Maka sangat penting dalam penyimpanan benih diisi ulang untuk memastikan kelanjutan konservasi bahan plasma nutfah dan distribusinya kepada pengguna di seluruh dunia. Program regenerasi AVRDC bertujuan untuk memaksimalkan produksi benih, meminimalkan siklus regenerasi, menjaga integritas genetik populasi dan memaksimalkan kualitas benih.</p>
                                </div>
                            </div>
                        </div>
                    </div> -->
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
                            <h2 class="wow bounce" data-wow-delay="0.2s">selamat datang di Bank Sumber Daya Genetik Sayuran</h2><br>
                            <p id="trans" class="wow fadeInUp" data-wow-delay="0.2s" style="text-align: left;">Bank Sumber Daya Genetik Sayuran adalah sistem informasi yang mengelola data semua plasma nutfah sayuran yang disimpan di bank plasma nutfah. Sistem ini digunakan untuk mengelola operasional bank plasma nutfah secara efisien. Bank Sumber Daya Genetik Sayuran menghubungkan semua operasi konservasi dan manajemen plasma nutfah, mulai dari pendaftaran, karakterisasi, evaluasi dan inventarisasi benih hingga distribusi benih hingga pengguna akhir.
                                
                            Bank Sumber Daya Genetik Sayuran menyediakan akses langsung pengguna ke data plasma nutfah melalui internet.

                            Penggunaan sistem ini GRATIS tetapi mohon dibaca terlebih dahulu<span><a :href="url('/terms')"> syarat dan ketentuan.</a></span></p>
                        </div>
                    </div>
                </div>
                <br>
                <!--End of row-->
                 <div class="media-body wow fadeIn" data-wow-delay="0.3s"><h5 class="color-2" style="font-size:18px;">3 Misi Utama Bank Sumber Daya Genetik Sayuran :</h5></div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list media-body wow fadeIn" data-wow-delay="0.3s">
                                    <div class="welcome_icon">
                                        <i class="fa fa-database"></i>
                                    </div><br>
                                    <h5>Collection</h5><br>
                                    <p>Menghimpun sumber daya genetik sayuran Indonesia melalui koleksi langsung dari lapangan (eksplorasi), koleksi dari lembaga/instansi lain, penarikan kembali SDG yang ada di bank genetik luar negeri, penambahan koleksi yang belum ada di Indonesia dari bank genetik luar negeri.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--End of col-md-3-->
                    <div class="col-md-4">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list media-body wow fadeIn" data-wow-delay="0.5s">
                                    <div class="welcome_icon">
                                        <i class="fa fa-file-text-o"></i>
                                    </div><br>
                                    <h5>Conservation</h5><br>
                                    <p>Melakukan konservasi dari pengelolaan sumber daya genetik sayuran dengan cara menginventarisasi SDG, melengkapi data passport, rejuvenasi/perbanyakan, karakterisasi, uji evaluasi (ketahanan terhadap penyakit).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    <div class="col-md-4">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list media-body wow fadeIn" data-wow-delay="0.7s">
                                    <div class="welcome_icon">
                                        <i class="fa fa-user"></i>
                                    </div><br>
                                    <h5>Convey</h5><br>
                                    <p>Memfasilitasi tukar menukar SDG antar <i>stakeholder</i> (instansi pemerintah, swasta, universitas, individu perorangan, lembaga swadaya masyarakat, maupun dengan bank genetik dan pengguna dari luar negeri).</p>
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
