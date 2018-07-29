<template>
    <tr>
        <td>{{ status }}</td>  
        <td>{{ pin }}</td>
        <td>{{ tempNumber }}</td>
        <td>{{ genus }}</td>
        <td>{{ species }}</td>
        <td>{{ cultivarName }}</td>
        <td>{{ country }}</td>
        <td>
            <a href="#" class="btn btn-success">Details</a>
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
