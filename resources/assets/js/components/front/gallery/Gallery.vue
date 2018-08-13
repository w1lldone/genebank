<template>
    <front-base>
        <section id="gall" class="text-center">
            <div class="container">
            <!-- <div class="col-md-12"> -->
                <div class="gall_title">
                    <h4>gallery</h4>
                </div>
            <!-- </div> -->
            <!--End of col-md-2-->
            <div class="colum">
                <!-- <div class="container"> -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="notes">
                                <div class="note blue">
                                    <div class="img_overlay">
                                        <p>Caption 1</p>
                                    </div>
                                    <img src="img/environment.jpg" alt="">
                                </div>
                                <div class="note red">
                                    <div class="img_overlay">
                                        <p>Caption 2</p>
                                    </div>
                                    <img src="img/gall_1.jpg" alt="">
                                </div>
                                <div class="note green">
                                    <div class="img_overlay">
                                        <p>Caption 3</p>
                                    </div>
                                    <img src="img/cliemate.jpg" alt="">
                                </div>
                                <div class="note yellow">
                                    <div class="img_overlay">
                                        <p>Caption 4</p>
                                    </div>
                                    <img src="img/photography.jpg" alt="">
                                </div>
                                <div class="note black">
                                    <div class="img_overlay">
                                        <p>Caption 5</p>
                                    </div>
                                    <img src="img/species.jpg" alt="">
                                </div>
                            </div><!--End of notes-->
                        </div><!--End of col-lg-12-->
                    </div><!--End of row-->
                </div><!--End of colum-->
            </div><!--End of container-->
        </section>
    </front-base>
</template>

<script>
import FrontBase from '../FrontBase';

export default {

  name: 'gallery',
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
</style>
