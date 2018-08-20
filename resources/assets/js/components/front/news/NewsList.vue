<template>
    <front-base>
        <section id="news">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4><b>Berita</b></h4>
                    </div>
                    <div style="margin-left:-20px;"class="news_news col-md-4" id="news">
                        <div class="single_news_item">
                            <div class="news_img">
                                <img src="img/news1.png" alt="">
                            </div>
                            <div class="news_content">
                                <a href="/news/berita1"><h3>Penandatanganan Perjanjian Kerjasama Pendampingan Pengelolaan Gene Bank Sayuran Nasional UGM dan EWINDO</h3></a>
                                <div class="expert">
                                    <div class="left-side text-left">
                                        <p class="left_side">
                                            <span class="clock"><i class="fa fa-clock-o"></i></span>
                                            <span class="time">Selasa, 15 Mei 2018</span>
                                            <a href=""><span class="admin"><i class="fa fa-user"></i>admin</span></a>
                                        </p>
                                        <p class="right_side text-right">
                                            <a href=""><span class="right_msg text-right"><i class="fa fa-comments-o"></i></span>
                                            <span class="count">0</span></a>
                                        </p>
                                    </div>
                                </div>

                                <p class="news_news_content">Dalam catatan perjalanan kerjasama bersama Akademisi, UGM memiliki ikatan yang sangat erat dengan Ewindo. Salah satu wujud nyata kerjasamanya adalah pengelolaan Gene Bank atau Bank Plasma Nutfah.</p>
                                <a href="/news/berita1" class="news_link">Selanjutnya</a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- konten 2 -->
                    <div style="margin-left:10px;"class="news_news col-md-4" id="news">
                        <div class="single_news_item">
                            <div class="news_img">
                                <img src="img/news2.jpg" alt="">
                            </div>
                            <div class="news_content">
                                <a href="/news/berita2"><h3>Bank Genetik Sayuran UGM dan EWINDO</h3></a>
                                <div class="expert">
                                    <div class="left-side text-left">
                                        <p class="left_side">
                                            <span class="clock"><i class="fa fa-clock-o"></i></span>
                                            <span class="time">Selasa, 9 November 2017</span>
                                            <a href=""><span class="admin"><i class="fa fa-user"></i>admin</span></a>
                                        </p>
                                        <p class="right_side text-right">
                                            <a href=""><span class="right_msg text-right"><i class="fa fa-comments-o"></i></span>
                                            <span class="count">0</span></a>
                                        </p>
                                    </div>
                                </div>

                                <p class="news_news_content">Menjaga kekayaan plasma nutfah bukanlah perkara mudah yang bisa dikerjakan sendiri oleh satu pihak. Dibutuhkan banyak sumber daya manusia dan teknologi yang tepat untuk melestarikannya. Hal ini memang harus dilakukan mengingat kesuksesan kualitas dari hasil pertanian terletak pada plasma nutfah yang terjaga agar menghasilkan benih yang unggul.</p>
                                <a href="/news/berita2" class="news_link">Selanjutnya</a>
                            </div>
                        </div>
                    </div>
                    <!-- konten 3 -->
                    <div style="margin-left:10px;"class="news_news col-md-4" id="news">
                        <div class="single_news_item">
                            <div class="news_img">
                                <img src="img/news3.JPG" alt="">
                            </div>
                            <div class="news_content">
                                <a href="/news/berita3"><h3>Hibah Bank Plasma EWINDO dengan UGM</h3></a>
                                <div class="expert">
                                    <div class="left-side text-left">
                                        <p class="left_side">
                                            <span class="clock"><i class="fa fa-clock-o"></i></span>
                                            <span class="time">Kamis, 02 November 2017</span>
                                            <a href=""><span class="admin"><i class="fa fa-user"></i>admin</span></a>
                                        </p>
                                        <p class="right_side text-right">
                                            <a href=""><span class="right_msg text-right"><i class="fa fa-comments-o"></i></span>
                                            <span class="count">0</span></a>
                                        </p>
                                    </div>
                                </div>

                                <p class="news_news_content">Pertukaran cendera mata antara Managing Director of PT East West Seed Indonesia (Ewindo) Glenn Pardede (kiri) dengan Rektor UGM Panut Mulyono seusai menandatangani perjanjian penyaluran hibah pembangunan dan operasional Bank Plasma Nutfah tanaman hortikultura di UGM, Yogyakarta.</p>
                                <a href="/news/berita3" class="news_link">Selanjutnya</a>
                            </div>
                        </div>
                    </div>
                    
                <!-- <div class="row"> -->
                    <!-- <div 
                    v-for="(item, index) in news"
                    :key="index"
                    class="col-md-4 item" 
                    >
                        <news-item
                        :title="item.title"
                        :date="item.date"
                        :image="item.image"
                        :author="item.author"
                        :body="item.body"
                        ></news-item>
                    </div> -->
                <!-- </div> -->
            </div>
        </div>
        </section>
    </front-base>
</template>

<script>
import FrontBase from '../FrontBase';
import NewsItem from './NewsItem';
import NewsDetail from './NewsDetail';
import berita1 from './Berita1';
import berita2 from './Berita2';
import berita3 from './Berita3';

export default {

  name: 'NewsList',
  data () {
    return {
        // news: [
        //     {
        //         id:1,
        //         title: "Penandatanganan Perjanjian Kerjasama Pendampingan Pengelolaan Gene bank Sayuran Nasional UGM dan EWINDO",
        //         image: "/img/news1.png",
        //         date: "Kamis, 26 Juli 2018",
        //         author: "admin",
        //         body: "Dalam catatan perjalanan kerjasama bersama Akademisi, UGM memiliki ikatan yang sangat erat dengan Ewindo. Salah satu wujud nyata kerjasamanya adalah pengelolaan Gene Bank atau Bank Plasma Nutfah."
        //     },
        //     {
        //         id:2,
        //         title: "Bank Genetik Sayuran UGM dan EWINDO",
        //         image: "/img/news2.jpg",
        //         date: "Kamis, 09 November 2017",
        //         author: "admin",
        //         body: "Menjaga kekayaan plasma nutfah bukanlah perkara mudah yang bisa dikerjakan sendiri oleh satu pihak. Dibutuhkan banyak sumber daya manusia dan teknologi yang tepat untuk melestarikannya. Hal ini memang harus dilakukan mengingat kesuksesan kualitas dari hasil pertanian terletak pada plasma nutfah yang terjaga agar menghasilkan benih yang unggul.",
        //     },
        //     {
        //         id:3,
        //         title: "Hibah Bank Plasma EWINDO dengan UGM",
        //         image: "/img/news3.JPG",
        //         date: "Kamis, 02 November 2017",
        //         author: "admin",
        //         body: "Pertukaran cendera mata antara Managing Director of PT East West Seed Indonesia (Ewindo) Glenn Pardede (kiri) dengan Rektor UGM Panut Mulyono seusai menandatangani perjanjian penyaluran hibah pembangunan dan operasional Bank Plasma Nutfah tanaman hortikultura di UGM, Yogyakarta.",
        //     }
        // ]
    }
  },
  components: {
      NewsItem,
      NewsDetail,
      FrontBase,
      berita1,
      berita2,
      berita3,
  }
}
</script>

<style lang="css" scoped>
</style>
