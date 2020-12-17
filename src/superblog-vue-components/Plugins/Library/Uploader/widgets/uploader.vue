<template>
<div class="row">
    <div class="col-12">  
      <div class="modal fade" id="uploader" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header bg-color-red">
              <h5 class="modal-title text-primary" id="">Upload Files</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="text-white">&times;</span>
              </button>
            </div>
            <form  method="POST" enctype="multipart/form-data">
             <div class="modal-body bg-color-darkblue">
              <div class="form-group">
                <label class="text-primary" for="FileSelector">Select Files</label>
                <input type="file" name="upload" id="file" class="form-control-file text-white bg-primary">
              </div>
             </div>
            <div class="modal-footer bg-color-red">
              <button id="upload-submit" type="submit" class="btn btn-success">Upload</button>
            </div>
           </form>
          </div>
        </div>
      </div>
    </div>
</div>
</template>

<style>
    
</style>

<script>



export default {
    components:{

    },

  methods: {

  },
  mounted(){

  }

}
</script>
