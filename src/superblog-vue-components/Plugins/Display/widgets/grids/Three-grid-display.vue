<template>
  <div class="row  mt-3 mb-3 justify-content-center">
     <PostPlate v-for="(Post, index) in Posts" :key="index" ></PostPlate>
     <pagination :meta="meta" v-on:pagination="data"></pagination>
  </div>
</template>

<script>

import PostPlate from './Post-Plate'
import pagination from '../menus/pagination'

export default {
      components:{
         PostPlate,
         pagination
      },
      data(){
          return{
              Posts:[1,2,3,4,5,6],
              data: [1,2,3,4,5]
          }
      }
      }
</script>

<style>

</style>