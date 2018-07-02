<template>
    <div class="container">
        <router-link :to="{ name:'home' }" >< back to home</router-link>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title m-0">
                            Genera
                        </h3>
                    </div>
                    <div class="card-body">
                        <genera-list
                        v-for="genus in generaList"
                        :genus="genus"
                        :key="genus.id"
                        ></genera-list>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import GeneraList from './GeneraList';

export default {
  name: 'GenusBase',
  data () {
    return {
        genera: [],
    }
  },
  computed: {
    generaList() {
        return this.genera
    }
  },
  components: {
    GeneraList,
  },
  async mounted() {
    let response = await axios.get('/api/genera')
    this.genera = response.data.data
  }
}
</script>

<style lang="css" scoped>
</style>
