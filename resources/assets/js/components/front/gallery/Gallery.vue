<template>
    <front-base>
        <section id="gall" class="text-center">
            <div class="col-md-12">
                <div class="gall_title">
                    <h2>gallery</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                </div>
            </div>
            <!--End of col-md-2-->
            <div class="colum">
                <div class="container">
                    <div class="row">
                        <form action="/">
                            <ul id="gall_menu" class="menu gall_custom_menu">
                                <li>
                                    <button data-filter="*" class="my_btn btn_active">Show All</button>
                                </li>
                                <li>
                                    <button data-filter=".blue, .black, .green" class="my_btn">environment</button>
                                </li>
                                <li>
                                    <button data-filter=".red, .green" class="my_btn">climate</button>
                                </li>
                                <li>
                                    <button data-filter=".blue, .yellow, .black" class="my_btn">photography</button>
                                </li>
                                <li>
                                    <button data-filter=".black" class="my_btn">species</button>
                                </li>
                                <li>
                                    <button data-filter=".black" class="my_btn">Black</button>
                                </li>
                            </ul>
                            <!--End of gall_menu-->
                        </form>
                        <!--End of Form-->
                    </div>
                    <!--End of row-->
                </div>
                <!--End of container-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="notes">
                                <div class="note blue">
                                    <div class="img_overlay">
                                        <p>Sun Homes, Dhaka</p>
                                    </div>
                                    <img src="img/environment.jpg" alt="">
                                </div>
                                <div class="note red">
                                    <div class="img_overlay">
                                        <p>Sun Homes, Dhaka</p>
                                    </div>
                                    <img src="img/gall_1.jpg" alt="">
                                </div>
                                <div class="note green">
                                    <div class="img_overlay">
                                        <p>Sun Homes, Dhaka</p>
                                    </div>
                                    <img src="img/cliemate.jpg" alt="">
                                </div>
                                <div class="note yellow">
                                    <div class="img_overlay">
                                        <p>Sun Homes, Dhaka</p>
                                    </div>
                                    <img src="img/photography.jpg" alt="">
                                </div>
                                <div class="note black">
                                    <div class="img_overlay">
                                        <p>Sun Homes, Dhaka</p>
                                    </div>
                                    <img src="img/species.jpg" alt="">
                                </div>
                            </div><!--End of notes-->
                        </div><!--End of col-lg-12-->
                    </div><!--End of row-->
                </div><!--End of container-->
            </div><!--End of colum-->
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
