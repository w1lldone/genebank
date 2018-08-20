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
                            <!-- <h3>{{ title }}</h3> -->
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
                            <img src="/img/news2.jpg" >
                        </div>
                            <!-- <p>{{ body }}</p> -->
                            <p> Menjaga kekayaan plasma nutfah bukanlah perkara mudah yang bisa dikerjakan sendiri oleh satu pihak. Dibutuhkan banyak sumber daya manusia dan teknologi yang tepat untuk melestarikannya. Hal ini memang harus dilakukan mengingat kesuksesan kualitas dari hasil pertanian terletak pada plasma nutfah yang terjaga agar menghasilkan benih yang unggul.
                            <br><br>
                            Oleh karena itu, Universitas Gadjah Mada (UGM) dan PT East West Seed Indonesia (EWINDO) yang memiliki visi sama menandatangani kerjasama dengan membangun Bank Genetik Sayuran. Pada 2 November 2017 UGM yang diwakili oleh Wakil Rektor Bidang Kerja Sama dan Alumni UGM, Dr. Paripurna , S.H., M.Hum., L.LM.,  serta Managing Director EWINDO, Glenn Pardede yang juga dihadiri oleh Rektor UGM Ir. Panut Mulyono, M.Eng., D.Eng., menandatangani perjanjian hibah penunjang Bank Genetik Sayuran. Nantinya, Bank ini berperan dalam pengelolaan sumber daya genetik yang berkelanjutan untuk masa depan pertanian Indonesia. 
                            
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

  name: 'berita2',
 
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
