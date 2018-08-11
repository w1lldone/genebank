<template>
    <front-base>
        <section id="download" >
            <div class="container animated fadeIn">
                <div class="row">
                    <h4><b>Download</b></h4>
                    <div class="row" data-ng-if="showcharts">
                        <div class="col-md-12">
                            <!-- Nav tabs -->
                            <ul id="download_menu" class="nav nav-pills nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#descriptors" role="tab" data-toggle="tab"><span class="tabHeadings">Descriptors</span></a></li>

                                <li role="presentation" ><a href="#protocols" role="tab" data-toggle="tab"><span class="tabHeadings">Protocols</span></a></li>

                                <li role="presentation"><a href="#record" role="tab" data-toggle="tab"><span class="tabHeadings">Record Sheets</span></a></li>

                                <li role="presentation"><a href="#other" role="tab" data-toggle="tab"><span class="tabHeadings">Other</span></a></li>
                            </ul>

                            <br>
                            <!-- tab panes -->
                            <div class="tab-content">
                                <!-- Descriptors -->
                                <div role="tabpanel" class="tab-pane fade in active" id="char" >
                                    <div  class="card col-md-3 col-sm-4" v-for="item in genera">
                                      <div class="card-header"><a :href="'/search/characterization/'+item.id">{{item.name}}</a></div>
                                      <div class="card-main">
                                        <img :src="item.photo" alt="...">
                                      </div>
                                    </div>
                                </div>

                                <!-- Protocols -->
                                <div role="tabpanel" class="tab-pane" id="protocols">
                                    <ul class="fa-ul">
                                        <li><i class="fa-li fa fa-square"></i><b>Crop regeneration</b></li>
                                        <p><a>Protocol for Regeneration and Characterization of Capsicum (2015)</a></p>
                                        <li><i class="fa-li fa fa-square"></i><b>Germination test</b></li>
                                        <p>Not available</p>
                                        <li><i class="fa-li fa fa-square"></i><b>Measurement of seed moisture content</b></li>
                                        <p>Not available</p>
                                    </ul>
                                </div>

                                <!-- Record -->
                                <div role="tabpanel" class="tab-pane" id="record">
                                    <ul class="fa-ul">
                                        <li><i class="fa-li fa fa-square"></i><b>Collecting record</b></li>
                                        <p><a>Collecting record sheet 20151020 revised</a></p>
                                        <li><i class="fa-li fa fa-square"></i><b>Germination test</b></li>
                                        <p><a>Germination sheet 2015 revised</a></p>
                                    </ul>
                                </div>

                                <!-- Other-->
                                <div role="tabpanel" class="tab-pane" id="other">
                                    <ul class="fa-ul">
                                        <li><i class="fa-li fa fa-square"></i><b>Monthly update on AVRDC Genebank holdings</b></li>
                                        <p><a></a></p>
                                        <li><i class="fa-li fa fa-square"></i><b>Key to species identification</b></li>
                                        <p><a>Key to the pepper species</a></p>
                                        <p><a>Key to the tomato species</a></p>
                                        <li><i class="fa-li fa fa-square"></i><b>Seed treatment for Capsicum germplasm</b></li>
                                        <p><a>Seed treatment for Capsicum germplasm</a></p>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
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
        genera: [],
    }
  },
  methods: {
    async loadGenera(){
      let response = await axios.get('/api/genera')
      this.genera = response.data.data
    },
    
  },
  mounted() {
    this.loadGenera()
  },
  components: {
      FrontBase,
  }
}
</script>

<style lang="css" scoped>

h4{
    margin-bottom: 30px;
}
#download {
    margin-top:80px;
    margin-bottom: 20px;
    min-height:2000px;
    background: #eeeeee;
    padding: 0px 80px 0px 80px;
}
.menu{
    /*background: #eeeeee;*/
    align-items: left;
    margin-left: -20px;
}
#download .download_title p {
    font-size: 16px;
    color: #393939;
    padding-bottom: 25px;
    padding-top: 0;
}
#download_menu li{
    border-right: 1px solid lightgrey; 
    border-bottom: 2px solid grey;
    background: #aed6f1;
}
.tab-content{
    margin-top: 30px;
}
img{
    margin-top: 30px;
    height: 140px;
    width:90%;
}
#protocols li, p{
    text-align: left;
    margin-top: 20px;
    margin-bottom: 20px;
}
#record li, p{
    text-align: left;
    margin-top: 20px;
    margin-bottom: 20px;
}
#other li, p{
    text-align: left;
    margin-top: 20px;
    margin-bottom: 20px;
}
</style>
