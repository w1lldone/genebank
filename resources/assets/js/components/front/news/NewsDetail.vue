<template>
    <front-base>
        <section id="news">
            <div class="container">
                <h4><b>News</b></h4>
                <div class="row">
                    <div class="single_news_item news_news">
                        <h5>Positive signals for Vietnam's recovering tomato market</h5>
                        
                        <div class="detail">
                            <h3>{{ title }}</h3>
                            <div class="expert">
                                <div class="left-side text-left">
                                    <p class="left_side">
                                        <span class="clock"><i class="fa fa-clock-o"></i></span>
                                        <span class="time">{{ date }}</span>
                                        <a href=""><span class="admin"><i class="fa fa-user"></i> {{ author }}</span></a>
                                    </p>
                                    <p class="right_side text-right">
                                        <a href=""><span class="right_msg text-right"><i class="fa fa-comments-o"></i></span>
                                        <span class="count">0</span></a>
                                    </p>
                                </div>
                            </div>
                            <div class="news_detail">
                            <img src="/img/news1.JPG" >
                        </div>
                            <p>The end of 2017 saw Vietnamese tomato growers in great distress when nearly 2,500 hectares were infected with a strange virus causing a major crop loss for tomato growers. The disease began in Lam Dong province affecting foliage and stunting growth of affected tomato plants. Government agencies and research institutes both in and outside of the country have undertaken research to identify the cause, as well as potential solutions, to this ongoing problem. Many seed companies are also participating in helping solve Vietnam’s tomato virus problem.</p>
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
