<template>
    <front-base>
        <section id="terms">
            <div class="container animated fadeIn">
                <div class="row">
                    <h4><b>Terms of Use</b></h4>
                    <p style="color:blue; font-weight:bold">Legal Notice and License Agreement</p>
                    <p style="color:red; font-weight:bold">You must read this Notice and License Agreement ("Agreement") before entering this site</p>
                    <p><span style="font-weight:bold">General</span><br>This site provides common access to information concerning the collections of genetic resources held by GRSU (Genetic Resources and Seed Unit), at AVRDC - The World Vegetable Center.</p>

                    <p><span style="font-weight:bold">Trademarks</span><br>The logo on this site is the trademark of AVRDC - The World Vegetable Center. Other product, service, and organization names mentioned in this Web site are for identification purposes only and may be trademarks of their respective owners.</p>

                    <p><span style="font-weight:bold">Copyright</span><br>Copyright laws and treaty provisions protect information appearing on this site ("Information"). AVRDC - The World Vegetable Center holds the copyright on such information. None of the Information may be copied, reproduced, modified, published, uploaded, posted, transmitted, or distributed in any form or by any means other than as described below, or with prior written permission of the copyright holder.</p>

                    <p><span style="font-weight:bold">Special Terms of Use</span><br>Any requests to use or reproduce information in a manner other than as expressly granted below, whether in whole or part, should be submitted in writing to AVRDC - The World Vegetable Center, Genetic Resources and Seed Unit (GRSU), PO Box 42, Shanhua, Tainan 741; Taiwan.</p>

                    <p>You must receive permission in writing prior to acting on the request.</p>

                    <p>You may access and use the Information only if you agree to and abide by the terms of this Agreement. Permission is granted to access and use the Information from this site, provided that:</p>

                    <ul class="fa-ul">
                        <li><i class="fa-li fa fa-square"></i>the copyright notice (i.e., "©" with the year and owner as listed at the end of the Information being used) appears in all copies;</li>
                        <li><i class="fa-li fa fa-square"></i>use of such Information is only for scientific research, breeding, genetic resource conservation, the sustainable management of genetic resources, or academic, informational, or personal use,</li>
                        <li><i class="fa-li fa fa-square"></i>the access or use of the Information, or any part thereof, does not result in the Information being sold or distributed for profit, including any commercial publication, reproduction, transmission or storage in a retrieval system;</li>
                        <li><i class="fa-li fa fa-square"></i>no modifications to any of the Information are made;</li>
                        <li><i class="fa-li fa fa-square"></i>the source of the Information is identified as "AVRDC - The World Vegetable Center "</li>
                        <li><i class="fa-li fa fa-square"></i>you do not claim ownership of the Information,</li>
                        <li><i class="fa-li fa fa-square"></i>you do not claim any intellectual property rights in the Information other than those specifically granted by this Agreement, and</li>
                        <li><i class="fa-li fa fa-square"></i>you take reasonable steps to communicate these terms in connection with any use and to and ensure compliance with these terms by any persons who obtain access to or use the Information as a result of your access or use of the Information.</li>
                    </ul>

                    <p><span style="font-weight:bold">Disclaimers</span><br>The contents of this site should not be construed as professional opinion. They are intended for general informational purposes only. The contents may contain technical inaccuracies or typographical errors. Users must directly contact AVRDC - The World Vegetable Center with questions or comments regarding information available on this site.</p>

                    <p>THE CONTENTS OF THIS SITE ARE PROVIDED "AS IS." AVRDC - THE WORLD VEGETABLE CENTER DISCLAIM ALL WARRANTIES REGARDING THE CONTENTS OF THIS SITE, INCLUDING IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, TITLE, AND NON-INFRINGEMENT.</p>

                    <p>AVRDC - THE WORLD VEGETABLE CENTER SHALL NOT BE LIABLE FOR DAMAGES RESULTING FROM LOSS OF USE, DATA, OR PROFITS, ARISING OUT OF OR IN CONNECTION WITH THE USE, ACCURACY, CONTENTS, OR PERFORMANCE OF INFORMATION OR INFORMATION ON THIS SITE, WHETHER IN AN ACTION OF CONTRACT, OR NEGLIGENCE OR OTHER TORT.</p> 
                    
                    <p>The designations employed and the presentation of the Information stored in or made accessible by this web site do not imply the expression of any opinion of AVRDC - The World Vegetable Center concerning the legal status of any country, city or area or its authorities, or concerning the delimitation of its frontiers or boundaries.</p>

                    <p><span style="font-weight:bold">Termination of License</span><br>This License shall terminate immediately if you violate any of the terms of this Agreement. You may terminate at any time the license to use the Information from this site. Upon termination for any reason, you agree to delete or destroy all copies of the Information, which you have made, and to cease all uses of the information.</p>

                    <p><span style="font-weight:bold">Assignability</span><br>The rights and licenses herein granted by Licensor with respect to any Information you obtain from this site are personal to you. You may assign or otherwise transfer these rights to another person, subject to the provisions of this agreement and subject to such other person agreeing to be bound by the terms of this agreement. You shall not assign or otherwise transfer to another person any other rights or licenses granted to you under by this Agreement. This Agreement shall be binding upon and inure to the benefit of the parties hereto and their respective heirs, personal representatives, successors and assigns.</p>

                    <p><span style="font-weight:bold">Invalidity or Unenforceability</span><br>If any provision of this Agreement is deemed to be invalid or unenforceable in whole or in part, such provision, to the extent that it is invalid or unenforceable, shall be deemed struck from the Agreement and shall not affect the validity or enforceability of any other provision hereof. In addition, the parties agree that a court having jurisdiction may revise any provision determined to be invalid or unenforceable to the extent required to make it valid and enforceable consistent with the intention of the parties and, if a court will not do so, the parties agree to negotiate a provision having an effect as close as permitted by applicable law to the provision determined to be invalid or unenforceable and to incorporate such substitute provision in the Agreement.</p>

                    <p><span style="font-weight:bold">Waiver</span><br>No delay in acting or failure to act shall constitute a waiver of any right of any party under this Agreement. Any waiver must be in writing and signed by the party entitled to the benefit of the right being waived. Unless otherwise stated in the waiver, any waiver applies only to the specific circumstance for which the waiver is given and not to any subsequent circumstance involving the same or any other right.</p>

                    <p style="color:blue; font-weight:bold">This is the end of the Legal Notice and License Agreement.</p>
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
    min-height:1500px;
    background: #eeeeee;
    padding: 0px 80px 0px 80px;
}
h4{
    margin-bottom: 30px;
}
p {
    margin-top: 15px;
    margin-bottom: 15px;
}
li {
    text-align: left; 
}

</style>
