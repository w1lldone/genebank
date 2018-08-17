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
                id:1,
                title: "Positive signals for Vietnam's recovering tomato market",
                image: "/img/news1.JPG",
                date: "Aug 12, 2018",
                author: "admin",
                body: "The end of 2017 saw Vietnamese tomato growers in great distress when nearly 2,500 hectares were infected with a strange virus causing a major crop loss for tomato growers. The disease began in Lam Dong province "
            },
            {
                id:2,
                title: "Nepal Field Day: East-West Seed partners with Jai Kisan Seed Centre",
                image: "/img/news2.jpg",
                date: "Aug 12, 2018",
                author: "admin",
                body: "Kathmandu, Nepal — Despite adverse weather conditions, the Nepal Mega Field Day on 16 June 2018 held in partnership with Jai Kisan Seed Centre was a huge success.",
            },
            {
                id:3,
                title: "Threat to Yellowstone’s grizzly bears.",
                image: "/img/threat_bear.jpg",
                date: "Aug 12, 2018",
                author: "admin",
                body: "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. ",
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
