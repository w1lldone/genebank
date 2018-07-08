<template>
    <component-base>
        <div class="col">
            <ul class="nav nav-tabs">
              <li v-for="nav in navs" :key="nav.text" class="nav-item">
                <a class="nav-link" :class="{active: category === nav.category}" href="#" @click="navigate(nav.category)">{{ nav.text }}</a>
              </li>
            </ul>
            <component :id="id" :is="getComponent" :details="details" :characters="vegetable.characters" :passport="vegetable.passport"></component>
        </div>
    </component-base>
</template>

<script>
import Details from './details/Details.vue';
import Characters from './details/Characters.vue';
import Passport from './details/Passport.vue';

export default {

  name: 'VegetableDetails',
  props: {
    id: String,
    category: String,
  },
  data () {
    return {
        navs: [
            {
                text: 'Details',
                category: 'details',
            },
            {
                text: 'Passport',
                category: 'passport',
            },
            {
                text: 'Characters',
                category: 'characters',
            }
        ],
        vegetable: {
            passport: {},
            characters: [],
        },
    }
  },
  computed: {
    getComponent() {
        var nav = this.navs.find(item => {
            return item.category === this.category
        })

        return nav.text
    },
    details() {
        var details = Object.assign({}, this.vegetable)
        delete details.passport
        delete details.characters
        
        return details
    },
  },
  methods: {
    navigate(category) {
        this.$router.push({
            name: 'vegetable.details',
            params: {
                id: this.id,
                category: category,
            }
        })
    },
    async getVegetable() {
        let response = await axios.get('/api/vegetables/'+this.id, {
            params: {
                view: "characters,passport"
            }
        })

        this.vegetable = response.data.data
    },
  },
  mounted() {
      this.getVegetable()
  },
  components: {
    Details,
    Characters,
    Passport,
  }
}
</script>

<style lang="css" scoped>
</style>
