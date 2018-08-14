<template>
    <div class="accordion" :id="'accordion'+type">
      <div class="card" v-for="(value, index) in categories"
      :id="index">
        <div class="card-header" :id="'heading'+type+index">
            <button class="btn btn-link p-0" type="button" data-toggle="collapse" :data-target="'#collapse'+type+index" aria-expanded="true" :aria-controls="'#collapse'+index">
                {{ value }}
            </button>
        </div>

        <div :id="'collapse'+type+index" class="collapse" :class="{ show: index == 0 }" aria-labelledby="headingOne" :data-parent="'#accordion'+type">
            <div class="card-body">
                <vegetable-attribute-form
                :type="type" 
                :vegetableId="vegetableId"
                :attributes="getCharactersInCategory(value)"></vegetable-attribute-form>
            </div>
        </div>
      </div>
    </div>
</template>

<script>
import VegetableAttributeForm from './VegetableAttributeForm';

export default {

  name: 'VegetableShowCharacters',
  props: {
    type: String,
    vegetableId: Number,
    characters: Array,
  },
  data () {
    return {

    }
  },
  methods: {
    getCharactersInCategory(category) {
        return this.characters.filter(item => {
            return item.category === category
        })
    }
  },
  computed: {
    categories: function () {
        return [...new Set(this.characters.map(item => item.category))]
    }
  },
  components: {
    VegetableAttributeForm,
  }
}
</script>

<style lang="css" scoped>
</style>
