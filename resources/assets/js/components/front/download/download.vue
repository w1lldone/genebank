<template>
    <front-base>
        <section id="download">
            <div class="container animated fadeIn">
                <div class="row">
                    <h4><b>Download</b></h4>
                    
                </div>
            </div>
        </section>
    </front-base>
</template>

<script>
import FrontBase from '../FrontBase';

export default {

  name: 'download',
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
#download {
    margin-top:80px;
    min-height:2000px;
    background: #eeeeee;
    padding: 0px 80px 0px 80px;
}
</style>
