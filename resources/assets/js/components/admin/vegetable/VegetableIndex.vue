<template>
    <section class="py-3">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <span>Vegetable list</span>
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#createVegetableModal"><i class="fa fa-plus"></i> Add new vegetable</button>
                    </div>
                    <div class="card-body">
                        <vegetable-list></vegetable-list>
                    </div>
                </div>
            </div>
        </div>
        <vegetable-create-modal></vegetable-create-modal>
    </section>
</template>

<script>
import VegetableList from './VegetableList';
import VegetableCreateModal from './VegetableCreateModal';

export default {

  name: 'VegetableIndex',

  data () {
    return {

    }
  },
  components: {
    VegetableList,
    VegetableCreateModal,
  }
}
</script>

<style lang="css" scoped>
</style>
