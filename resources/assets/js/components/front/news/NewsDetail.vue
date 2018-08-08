<template>
    <front-base>
        <section id="news">
            <div class="container">
                <h4><b>News</b></h4>
                <div class="row">
                    <div class="single_news_item news_news">
                        <div class="news_img">
                            <img :src="image" :alt="title">
                        </div>
                        <div class="news_content">
                            <a href="#"><h3>{{ title }}</h3></a>
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
                            <p class="news_news_content">{{ body }}</p>
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
</style>
