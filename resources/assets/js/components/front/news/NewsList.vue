<template>
    <front-base>
        <section id="news">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4><b>Berita</b></h4>
                    </div>
                </div>
                <!-- <div class="row"> -->
                    <div 
                    v-for="(item, index) in news"
                    :key="index"
                    class="col-md-4 item" 
                    >
                        <news-item
                        :id="item.id"
                        :title="item.title"
                        :date="item.date"
                        :image="item.image"
                        :author="item.author"
                        :body="item.body"
                        ></news-item>
                    </div>
                <!-- </div> -->
            </div>
        </section>
    </front-base>
</template>

<script>
import FrontBase from '../FrontBase';
import NewsItem from './NewsItem';
import NewsDetail from './NewsDetail';

export default {

  name: 'NewsList',
  data () {
    return {
        news: [
            {
                id: 'berita-1',
                title: "Penandatanganan Perjanjian Kerjasama Pendampingan Pengelolaan Gene bank Sayuran Nasional UGM dan EWINDO",
                image: "/img/news1.png",
                date: "Kamis, 26 Juli 2018",
                author: "admin",
                body: "Dalam catatan perjalanan kerjasama bersama Akademisi, UGM memiliki ikatan yang sangat erat dengan Ewindo. Salah satu wujud nyata kerjasamanya adalah pengelolaan Gene Bank atau Bank Plasma Nutfah."
            },
            {
                id: 'berita-2',
                title: "Bank Genetik Sayuran UGM dan EWINDO",
                image: "/img/news2.jpg",
                date: "Kamis, 09 November 2017",
                author: "admin",
                body: "Menjaga kekayaan plasma nutfah bukanlah perkara mudah yang bisa dikerjakan sendiri oleh satu pihak. Dibutuhkan banyak sumber daya manusia dan teknologi yang tepat untuk melestarikannya. Hal ini memang harus dilakukan mengingat kesuksesan kualitas dari hasil pertanian terletak pada plasma nutfah yang terjaga agar menghasilkan benih yang unggul.",
            },
            {
                id: 'berita-3',
                title: "Hibah Bank Plasma EWINDO dengan UGM",
                image: "/img/news3.JPG",
                date: "Kamis, 02 November 2017",
                author: "admin",
                body: "Pertukaran cendera mata antara Managing Director of PT East West Seed Indonesia (Ewindo) Glenn Pardede (kiri) dengan Rektor UGM Panut Mulyono seusai menandatangani perjanjian penyaluran hibah pembangunan dan operasional Bank Plasma Nutfah tanaman hortikultura di UGM, Yogyakarta.",
            }
        ]
    }
  },
  components: {
      NewsItem,
      NewsDetail,
      FrontBase,
  }
}
</script>

<style lang="css" scoped>
</style>
