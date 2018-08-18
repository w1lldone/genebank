<template>
    <div>
        <div id="filters_area">
            <div id="filters">
              <b>Show:</b>
              <select id="perLow">
                <option value="20" selected="selected">20</option>
                <option value="40">40</option>
                <option value="60">60</option>
                <option value="80">80</option>
                <option value="100">100</option>
              </select> 
              <b id="add_area"> &nbsp; Filters: &nbsp;
                <a id="add" title="search" class="btn btn-success" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">SEARCH</a> &nbsp;
                <a id="reset_filters" title="reset all" class="btn btn-success">RESET ALL</a>
              </b>
            </div>
          </div>
          <br>
          <div class="options collapse" id="collapseExample" >
            <table>
              <thead class=list-table>
                <tr>
                  <th colspan="6">Filter Options</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="text-align: right">UGM Number (PINO)</td>
                  <td><input name="VINO" v-model="filters.plant_introduction_number" placeholder="e.g. UGM000001, UGM000002, ..." type="text"></td>
                  <td><button type="button" class="btn btn-success" title="add" @click="updateFilter('plant_introduction_number')">ADD</button></td>
                  
                  <td style="text-align: right">Temporary Number</td>
                  <td><input name="ACCNO" v-model="filters.temporary_number" placeholder="e.g. GTE 332, GTE 230, ..." type="text"></td>
                  <td><button type="button" class="btn btn-success" title="add" @click="updateFilter('temporary_number')">ADD</button></td>
                </tr>
                <tr>
                  <td style="text-align: right">Donor number</td>
                  <td><input name="TEMPNO" v-model="filters.donor_number" placeholder="" type="text"></td>
                  <td><button type="button" class="btn btn-success" title="add" @click="updateFilter('donor_number')">ADD</button></td>
                  
                  <td style="text-align: right">Cultivar Name</td>
                  <td><input name="PEDCUL" type="text" v-model="filters.cultivar_name"></td>
                  <td><a name="add" class="btn btn-success" title="add" @click="updateFilter('cultivar_name')">ADD</a></td>
                </tr>
                <tr>
                  <td style="text-align: right">Species</td>
                  <td>
                    <select name="SPECIES" v-model="filters.species_id" @change="updateFilter('species_id')">
                        <option value="">SELECT SPECIES</option>
                        <option v-for="item in species" :value="item.id">{{ item.name }}</option>
                    </select>
                  </td>
                  <td><a name="add" class="btn btn-success" title="add">ADD</a></td>

                  <td style="text-align: right">Subtaxa</td>
                  <td><input name="PEDCUL" type="text" v-model="filters.subtaxa"></td>
                  <td><a name="add" class="btn btn-success" title="add" @click="updateFilter('subtaxa')">ADD</a></td>
                </tr>
                <tr>
                  <td style="text-align: right">Country</td>
                  <td>
                    <select name="COUNTRY">
                      <option value="">* Any *</option>
                      <option value="indonesia">Indonesia</option>
                    </select>
                  </td>
                  <td><a name="add" class="btn btn-success" title="add">ADD</a></td>
                  <!-- kosong -->
                  <td></td><td></td><td></td>
                </tr>
              </tbody>
            </table>
          </div>      
          <br> <br>
          <!-- end of filters -->
        </div>
    </div>
</template>

<script>
export default {

  name: 'CharVegetableListFilter',
  props: {
    species: Array,
  },
  data () {
    return {
        filters: {
            plant_introduction_number: '',
            temporary_number: '',
            cultivar_name: '',
            subtaxa: '',
            donor_number: '',
            species_id: '',
            country: '',
        },
    }
  },
  methods: {
    updateFilter(index) {
        this.$emit('update:filters', {
            index: index,
            value: this.filters[index]
        });
    }
  }
}
</script>

<style lang="css" scoped>
</style>
