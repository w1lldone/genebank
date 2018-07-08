<template>
    <div class="card">
        <div class="card-body">
            <div class="form-group row">
                <label class="col-md-3">
                    Plant introduction number
                </label>
                <div class="col">
                    <input type="text" readonly class="form-control-plaintext" :value="details.plant_introduction_number">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3">
                    Genus
                </label>
                <div class="col">
                    <input type="text" readonly class="form-control-plaintext" :value="details.species.genus.name">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3">
                    Species
                </label>
                <div class="col">
                    <input type="text" readonly class="form-control-plaintext" :value="details.species.name">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3">
                    Cultivar name
                </label>
                <div class="col-md-5">
                    <input class="form-control" ref="inputs" type="text" :value="details.cultivar_name">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3">
                    Temporary number
                </label>
                <div class="col-md-5">
                    <input class="form-control" ref="inputs" type="text" :value="details.temporary_number">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

  name: 'Details',
  props: {
    details: Object,
  },
  data () {
    return {

    }
  },
  computed: {
  }
}
</script>

<style lang="css" scoped>
</style>
