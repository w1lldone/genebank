<template>
    <div class="form-inline">
        <div class="form-group">
            <label class="mr-5">Genus</label>
            <select class="custom-select" @change="onUpdate('genus_id', $event)">
                <option value="">SHOW ALL</option>
                <option v-for="genus in genera" :value="genus.id">{{ genus.name }}</option>
            </select>
        </div>
    </div>
</template>

<script>
export default {

  name: 'VegetableIndexFilter',
  props: {
    genus_id: String,
  },
  data () {
    return {
        loading: true,
        genera: []
    }
  },
  methods: {
    async loadGenera() {
        let response = await axios.get(`/api/genera`)
        this.genera = response.data.data
    },
    onUpdate(type, event) {
        this.$emit('update:'+type, event.target.value)
    }
  },
  async mounted() {
    await this.loadGenera()
    this.loading = false
  },
}
</script>

<style lang="css" scoped>
</style>
