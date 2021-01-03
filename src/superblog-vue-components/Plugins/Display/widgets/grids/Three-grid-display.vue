<template>
  <div class="row  mt-3 mb-3 justify-content-center">
     <PostPlate v-for="(Post, index) in Posts" :key="index" :Post="Post" ></PostPlate>
     <pagination :meta="meta" v-on:pagination="fetchData"></pagination>
  </div>
</template>

<script>

import PostPlate from './Post-Plate'
import pagination from '../menus/pagination'

export default {
  props: ['displaydetails'],
      components:{
         PostPlate,
         pagination
      },
      data(){
          return{
              Posts:[],
              meta: {}
          }
      },
      methods:{
        /**
         * Fetch Posts
        */
        fetchData(page){
            const DisplayDetails ={
                category: this.displaydetails.category,
                pagination: this.displaydetails.pagination,
                
            }
          axios.post('/displaypostbycategory',{
            params:{page},
            category: this.displaydetails.category,
            pagination: this.displaydetails.pagination,
          })
          .then((response)=>{
             //alert('data fetched')
              this.Posts = response.data.data;
              this.meta = response.data.meta;
              console.log(response.data.meta)
          })
        },
      },
      mounted(){
        this.fetchData();
          Event.$on('pagination',(page)=>{
            axios.post('/displaypostbycategory',{
              params:{
                page
                },
            category: this.displaydetails.category,
            pagination: this.displaydetails.pagination,
            }).then((res)=>{
                this.Posts = res.data.data;
                this.meta = res.data.meta;
            })
       //alert(page)
     });
      }
      }
</script>

<style>

</style>