<template>
  <div class="dropdown-menu bg-color-darkblue" aria-labelledby="fileoptions">
    <button @click="deleteFile()" class="dropdown-item bg-danger text-white" >Delete File</button>
<button @click="renameFile()" class="dropdown-item bg-warning text-white" >Rename File</button>
  </div>
</template>

<script>
export default {
    props: ['id'],
    methods:{
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