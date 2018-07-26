<template>
    <front-base>
        <section id="news">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="latest_news text-center">
                            <h2>latest news</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo cum libero vitae quos eaque commodi.</p>
                        </div>
                    </div>
                </div><!--End of row-->
                <div class="row">
                    <div 
                    v-for="(item, index) in news"
                    :key="index"
                    class="col-md-4" 
                    >
                        <news-item
                        :title="item.title"
                        :date="item.date"
                        :image="item.image"
                        :author="item.author"
                        :body="item.body"
                        ></news-item>
                    </div>
                </div>
            </div>
        </section>
    </front-base>
</template>

<script>
import FrontBase from '../FrontBase';
import NewsItem from './NewsItem';

export default {

  name: 'NewsList',
  data () {
    return {
        news: [
            {
                title: "Climate change is affecting bird migration",
                image: "/img/climate_effect.jpg",
                date: "Aug 12, 2018",
                author: "admin",
                body: "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,"
            },
            {
                title: "How to avoid indoor air pollution?",
                image: "/img/air_pollutuon.jpg",
                date: "Aug 12, 2018",
                author: "admin",
                body: "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. ",
            },
            {
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
      FrontBase,
  }
}
</script>

<style lang="css" scoped>
</style>
