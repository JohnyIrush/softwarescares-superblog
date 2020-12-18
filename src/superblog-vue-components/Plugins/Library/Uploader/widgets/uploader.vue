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
            <form @submit.prevent="upload()"  method="POST" enctype="multipart/form-data">
             <div class="modal-body bg-color-darkblue">
              <div class="form-group">
                <label class="text-primary" for="FileSelector">Select Files</label>
                <input type="file" name="upload" id="file" class="form-control-file text-white bg-primary" multiple>
              </div>
             </div>
            <div class="modal-footer bg-color-red">
              <input  type="submit" class="btn btn-success" value="upload">
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
    //upload File/s To The server
     async upload(){

       const files = $('#file').val(); //upload input

       if (files=='') {
           alert('No Files Selected')
       }
       else{
         const res = await this.sendRequest('post','upload',files);
         console.log(res);
       }

       

       //console.log(files);

       //alert('test 3 uploader')

       //alert(files)
         
     },

  },
  mounted(){
  //alert('test 2 uploader')
  }

}
</script>
