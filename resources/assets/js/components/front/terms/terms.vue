<template>
    <front-base>
        <section id="terms">
            <div class="container animated fadeIn">
                <div class="row">
                    <h4><b>Terms of Use</b></h4>
                    
                </div>
            </div>
        </section>
    </front-base>
</template>

<script>
import FrontBase from '../FrontBase';

export default {

  name: 'terms',
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
#terms {
    margin-top:80px;
    min-height:2000px;
    background: #eeeeee;
    padding: 0px 80px 0px 80px;
}
</style>
