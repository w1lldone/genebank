<template>
    <home-base>
      <div class="main">
      <div class="one">
        <div class="register">
          <h3>Create your account</h3>
          <form id="reg-form">
            <div>
              <label for="name">Name</label>
              <input type="text" id="name" spellcheck="false" placeholder="Shridhar Deshmukh"/>
            </div>
            <div>
              <label for="email">Email</label>
              <input type="text" id="email" spellcheck="false" placeholder="shridhardeshmukh@xyz.com"/>
            </div>
            <div>
              <label for="username">Username</label>
              <input type="text" id="username" spellcheck="false" placeholder="shree33" />
            </div>
            <div>
              <label for="password">Password</label>
              <input type="password" id="password" />
            </div>
            <div>
              <label for="password-again">Password Again</label>
              <input type="password" id="password-again" />
            </div>
            <div>
              <label></label>
              <input type="submit" value="Create Account" id="create-account" class="button"/>
            </div>
          </form>
          <div class="sep">
            <span class="or">OR</span>
          </div>
          <div class="connect">
            <div class="social-buttons facebook">
              <a href="#">
                <span>Facebook</span>
              </a>
            </div>
            <div class="social-buttons twitter">
              <a href="#">
                <span>Twitter</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="two">
        <div class="register">
          <h3>Create your account</h3>
          <form id="reg-form1">
            <div>
              <label for="name1">Name</label>
              <input type="text" id="name1" spellcheck="false" placeholder="Shridhar Deshmukh"/>
            </div>
            <div>
              <label for="email1">Email</label>
              <input type="text" id="email1" spellcheck="false" placeholder="shridhardeshmukh@xyz.com"/>
            </div>
            <div>
              <label for="username1">Username</label>
              <input type="text" id="username1" spellcheck="false" placeholder="shree33" />
            </div>
            <div>
              <label for="password1">Password</label>
              <input type="password" id="password1" />
            </div>
            <div>
              <label for="password-again1">Password Again</label>
              <input type="password" id="password-again1" />
            </div>
            <div>
              <label></label>
              <input type="submit" value="Create Account" id="create-account1" class="button"/>
            </div>
          </form>
          <div class="sep">
            <span class="or">OR</span>
          </div>
          <div class="connect">
            <div class="social-buttons facebook">
              <a href="#">
                <span>Facebook</span>
              </a>
            </div>
            <div class="social-buttons twitter">
              <a href="#">
                <span>Twitter</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
         <!--Start of footer-->
        <section id="footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-6">
                        <div class="copyright" style="text-align:center">
                            <p >@ 2018 - Copyright <span><a href="">Smart System Research Group</a></span>, Universitas Gadjah Mada</p>
                        </div>
                    </div>
                    
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--End of footer-->
        
    </home-base>
</template>

<script>
export default {

  name: 'Char',

  data () {
    return {

    }
  }
}
</script>

<style lang="css" scoped>
</style>
