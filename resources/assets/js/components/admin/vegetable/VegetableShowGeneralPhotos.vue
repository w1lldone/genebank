<template>
    <div class="row">
        <div v-if="photos.length == 0" class="col-md-7 text-center">
            <h3 class="text-muted">
                <i class="fa fa-image fa-3x"></i> <br>
                No photos uploaded
            </h3>
        </div>
        <div v-for="(photo, index) in photos" class="col-md-6">
            <div class="d-flex align-items-center justify-content-center position-absolute h-100 w-100 action">
              <div class="">
                  <button type="button" class="btn btn-sm"><i class="fa fa-eye fa-fw"></i></button>
                  <button type="button" class="btn btn-sm btn-danger" @click="deletePhoto(photo.id, index)"><i class="fa fa-trash fa-fw"></i></button>
              </div>
            </div>
            <img :src="photo.url" class="img-fluid">
        </div>
        <div class="col-md-12" v-if="loading">
          <button class="btn btn-info disabled" type="button">
            <i class="fa fa-upload fa-fw"></i> Uploading...
          </button>
        </div>
        <div class="col-12 mt-2" v-else>
            <label class="btn btn-info btn-file" v-if="photos.length < 2">
              <i class="fa fa-upload fa-fw"></i> Upload new photo
              <input type="file" ref="photo" name="front_cover" style="display: none;" @change="uploadPhoto">
            </label>
            <div class="alert alert-warning" role="alert" v-else>
              Only two photos are allowed. Please remove a photo to add a new one.
            </div>
        </div>
    </div>
</template>

<script>
export default {

  name: 'VegetableShowGeneralPhotos',
  props: {
    photos: Array,
    vegetableId: Number,
  },
  data () {
    return {
      loading: false
    }
  },
  methods: {
    async deletePhoto(photoId, index) {
        let confirmed = confirm('Are you sure?')

        if (confirmed) {
            try {
              let response = await axios.delete(`/api/vegetables/photos/${photoId}`)
              toastr.success('The photo has been deleted', 'Success!')
              this.$emit('delete:photo', {
                  index: index
              })
            } catch(error) {
              console.log(error.response)
              toastr.error(error.response.statusText, error.response.status)
            }
        }
    },
    async uploadPhoto() {
      this.loading = true
      let formData = new FormData()
      var photo = this.$refs.photo.files[0]
      formData.append('name', 'Photo')
      formData.append('photo', photo)

      try {
        let response = await axios.post(`/api/vegetables/${this.vegetableId}/photos`, 
            formData,
            {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }
        )

        toastr.success('The photo has been uploaded', 'Success!')
        this.$emit('store:photo', {
          data: response.data.data
        })
      } catch(error) {
        console.log(error.response)
        toastr.error(error.response.statusText, error.response.status)
      }

      this.loading = false
    }
  },
  computed: {

  }
}
</script>

<style lang="css" scoped>
.action {
 -webkit-transition:all ease .5s;
 -moz-transition:all ease .5s;
 transition:all ease .5s;
 opacity:0;
}

.action:hover {
 opacity:1
}

/*Upload file button*/
.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
</style>
