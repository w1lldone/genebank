<template>
    <div>
        <navbar></navbar>
        <slot></slot>
        <!--Start of footer-->
        <section id="footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-4 support">
                        <p>Supported By : &emsp;</p>
                        <img src="img/PanahMerah.png">
                    </div>
                   <!--  <div class="col-md-6">
                        <div class="copyright" style="text-align:center">
                            <p >@ 2018 - Copyright <span><a href=""> East-West Seed Indonesia</a></span></p>
                        </div>
                    </div> -->
                    
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--End of footer-->
    </div>
</template>

<script>
import Navbar from './navigations/Navbar';

export default {

  name: 'FrontBase',

  data () {
    return {

    }
  },
  components: {
    Navbar
  }
}
</script>

<style lang="css" scoped>
</style>
