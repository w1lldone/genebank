<template>
    <tr class="tbl-content">
        <td>{{ status }}</td>  
        <td>{{ pin }}</td>
        <td>{{ tempNumber }}</td>
        <td>{{ genus }}</td>
        <td>{{ species }}</td>
        <td>{{ cultivarName }}</td>
        <td>{{ country }}</td>
        <td>
            <input type="button" value="Detail" onclick="window.location.href='/search/passport/detail'">
            
        </td>
    </tr>
</template>

<script>
export default {

  name: 'PassportListItem',
  props: {
    status: String,
    pin: String,
    tempNumber: String,
    genus: String,
    species: String,
    cultivarName: String,
    country: String,
  },
  data () {
    return {

    }
  }
}
</script>

<style lang="css" scoped>
</style>
