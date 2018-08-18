<template>
    <front-base>
        <section id="news">
            <div class="container">
                <h4><b>Berita</b></h4>
                <br><br>
                <div class="row">
                    <div class="single_news_item news_news">                        
                        <div class="detail">
                            <br>
                            <h3>{{ title }}</h3>
                            <h3 class="color-2" style="text-align: center;padding-bottom: 5px;">Penandatanganan Perjanjian Kerjasama Pendampingan Pengelolaan Gene Bank Sayuran Nasional UGM dan EWINDO</h3>
                            <div class="expert">
                                <div class="left-side text-left" style="display: inline;">
                                    <p class="left_side">
                                        <span class="clock"><i class="fa fa-clock-o"></i></span>
                                        <span class="time">Selasa, 15 Mei 2018</span>
                                        <a href=""><span class="admin"><i class="fa fa-user"></i>admin</span></a>
                                        <a href=""><span class="right_msg text-right"><i class="fa fa-comments-o"></i></span>
                                        <span class="count">0</span></a>
                                        <!-- <span class="time">{{ date }}</span> -->
                                        <!-- <a href=""><span class="admin"><i class="fa fa-user"></i> {{ author }}</span></a> -->

                                    </p>
                                </div>
                            </div>
                            <div class="news_detail">
                            <img src="/img/news1.png" >
                        </div>
                            <!-- <p>{{ body }}</p> -->
                            <p> Dalam catatan perjalanan kerjasama bersama Akademisi, UGM memiliki ikatan yang sangat erat dengan Ewindo. Salah satu wujud nyata kerjasamanya adalah pengelolaan Gene Bank atau Bank Plasma Nutfah. Di sela Expo Nasional 2018 kemarin, Ewindo mengundang perwakilan akademisi dari UGM untuk merealisasikan kerjasama kedua belah pihak dengan menandatangani Perjanjian Kerjasama Pendampingan Pengelolaan Gene Bank Sayuran Nasional di kantor pusat Purwakarta.
                            <br><br>
                            Bertanggal 15 Mei, Wakil Rektor Bidang Kerjasama dan Alumni, Dr. Paripurna, S.H., M.Hum., LL.M. Direktur Kemitraan, Alumni dan Urusan International, Dr. Danang Sri Hadmoko, S.Si., M.Sc. Kepala Pusat Inovasi Agro Teknologi, Dr. Ir, Taryono, M.Sc. Dekan Fakultas Pertanian UGM, Dr. Jamhari, S.P, M.P. sebagai perwakilan undangan Universitas Gadjah Mada menyempatkan untuk mengunjungi Expo Nasional Panah Merah 2018. Mereka diajak untuk melihat inovasi dan teknologi yang digunakan dalam pengembangan produk Cap Panah Merah dari uji penelitian hingga proses pengemasan. Selain itu, mereka juga berkesempatan melihat varietas-varietas baru yang bersamaan diluncurkan dengan acara Expo Nasional Panah Merah 2018 sebanyak 15 varietas. 
                            <br><br>
                            Dengan penandatangan ini diharapkan Ewindo dan UGM bisa membentuk kerjasama yang juga membantu pertanian Indonesia kedepannya dengan membuat Gene Bank Nasional. Kerjasama ini bukanlah awal atau akhir namun sebuah tonggak sejarah dari perubahan masa depan Pertanian Indonesia.
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </front-base>
</template>


<script>
import FrontBase from '../FrontBase';
import NewsList from './NewsList';

export default {

  name: 'NewsDetail',
  props: {
    id: Number,
    news: String,
    title: String,
    image: String,
    date: String,
    author: String,
    body: String,
  },

  computed: {
  },

  components: {
      FrontBase,
      NewsList,
  }
}
</script>

<style lang="css" scoped>
h5{
    text-align: center;
    font-size: 30px;
    margin-top: 20px;
    margin-bottom: 20px;
}
.news_detail img{
    height: 30%;
    width: 60%;
    align-items: middle;
    margin-bottom: 30px;
    margin-left: 20px;
}
p{
    margin: 20px;
}
</style>
