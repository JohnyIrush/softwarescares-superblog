<template>
  <div class="dropdown-menu" aria-labelledby="fileoptions">
    <button @click="deleteFile()" class="dropdown-item bg-danger text-white" >Delete File</button>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</template>

<script>
export default {
    props: ['id'],
    methods:{
        //Delete a file
     async deleteFile(){
         const res = await this.sendRequest('post','delete/' + this.id);
     }

    },
    mounted(){
    }

}
</script>

<style>

</style>