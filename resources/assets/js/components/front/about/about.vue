<template>
    <front-base>
        <section id="about" >
            <div class="container animated fadeIn">
                <div class="thumbnail col-sm-12" style="padding:20px; bottom:0; margin:0 auto 30px">
                    <h4 style="margin-left:1vmax; text-align:center; margin:4px 0px 16px;">ABOUT US</h4>
                    <hr style="border-top: 3px solid #00877d; width: 40px; margin:0 auto 20px">
                    <div class="conten-about" style="text-align:center; vertical-align:middle">
                        <span><p style="font-weight:600">Genebank Universitas Gadjah Mada</p></span>
                        <!-- <p>Version: 1.0.1</p> -->
                        <p>Copyright 2018 Smart System Research Group</p>
                    </div>
                    <h4 style="margin-left:1vmax; text-align:center; margin:64px 0px 16px;">OUR TEAM</h4>
                    <hr style="border-top: 3px solid #00877d; width: 40px; margin:0 auto 20px">
                    <div class="row center" align="center" style="width:100%">
                        <div style="display:inline-block; margin-bottom:30px">
                            <img src="img/member/wayan.jpg" style="height: 100px; margin:30px; border-radius:50%"><br>
                            <span><strong>I Wayan Mustika</strong></span><br>
                            <span>Supervisor</span>
                        </div>
                        <div style="display:inline-block; margin-bottom:30px">
                            <img src="img/member/wildan.jpg" style="height: 100px; margin:30px; border-radius:50%"><br>
                            <span><strong>Wildan Ainurrahman</strong></span><br>
                            <span>Back-end Developer</span>
                        </div>
                        <div style="display:inline-block; margin-bottom:30px">
                            <img src="img/member/member2.jpg" style="height: 100px; margin:30px; border-radius:50%"><br>
                            <span><strong>Rara Priska Yuniar</strong></span><br>
                            <span>Front-end Developer</span>
                        </div>
                    </div>
                    <br>
                    <h4 style="margin-left:1vmax; text-align:center; margin:40px 0px 16px;">SUPPORTED BY</h4>
                    <hr style="border-top: 3px solid #00877d; width: 40px; margin:0 auto 20px">
                </div>
            </div>
        </section>
    </front-base>
</template>

<script>
import FrontBase from '../FrontBase';

export default {

  name: 'about',
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
