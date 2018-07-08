<template>
    <div class="card card-body">
        <div v-for="(value, key) in passport" class="form-group row">
            <label class="col-md-3">
                {{ key }}
            </label>
            <div class="col">
                <input type="text" readonly class="form-control" :value="value">
            </div>
        </div>
    </div>
</template>

<script>
export default {

  name: 'Passport',
  props: {
    id: String,
    passport: Object,
  },
  data () {
    return {

    }
  }
}
</script>

<style lang="css" scoped>
</style>
