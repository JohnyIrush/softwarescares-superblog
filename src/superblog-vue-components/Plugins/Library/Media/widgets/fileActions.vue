<template>
  <div class="dropdown-menu bg-color-darkblue" aria-labelledby="fileoptions">
    <button @click="deleteFile()" class="dropdown-item bg-danger text-white" >Delete File</button>
    <button @click="renameFile()" class="dropdown-item bg-warning text-white" >Rename File</button>

    <button v-if="$Post.returnEditCategoryMode()==true || $Post.returnEditPostMode()" @click="setMedia()" class="dropdown-item bg-warning text-white" >Set Media</button>

  </div>
</template>
  
<script>
export default {
    props: ['id'],
    methods:{
      //set Media
      setMedia(id){
         const Image = {
             thumbnail: this.id,
         }
         
        if (this.$Post.returnEditCategoryMode()==false) {

         axios.post('/updatepostthumbnail/' + this.$Post.returnEditPostId(),Image)
         .then(()=>{
              this.$swal({
                position: 'top-end',
                icon: 'success',
                title: 'Thumbnail Set Successfull',
                showConfirmButton: false,
                timer: 1500
              })
            this.$Post.setEditPostMode(0);
            this.$Post.setEditPostId(0);
         })
         .catch(()=>{
            alert('There was an error Saving Data to the database')
         })

        }else{

         axios.post('/updatecategorythumbnail/' + this.$Post.returnEditCategoryId(),Image)
         .then(()=>{
              this.$swal({
                position: 'top-end',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500
              })
            this.$Post.setEditCategoryMode(0);
            this.$Post.setEditCategoryId(0);
         })
         .catch(()=>{
            alert('There was an error Saving Data to the database')
         })

        }
         
      },
      //send request after confirmation
      async delete(){
         const res = await this.sendRequest('post','delete/' + this.id);
         return res;
      },
        //Delete a file
      deleteFile(){
          this.$swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.value) {
               this.delete();
               //alert(this.delete().status);
               //console.log(this.delete());
            }
          })
     },
      //Delete a file
     async renameFile(){
         const res = await this.sendRequest('post','rename/' + this.id);
     }

    },
    mounted(){

    }

}
</script>

<style>

</style>