<template>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select name="category" v-model="category" class="form-control" id="exampleFormControlSelect1">
      <option v-for="(Category, index) in Categories" :key="index" :value="Category.id" > {{Category.category}} </option>
    </select>
  </div>
</template>

<script>

export default {
  components:{

  },
  data(){
     return{
         Categories: [],
         category: null
     }
  },
      methods:{
        /**
         * Fetch Categories
        */
        fetchData(){
          axios.get('/getcategories')
          .then((response)=>{
              this.Categories = response.data;
              console.log(response);
          })
        },
      },
     mounted(){
         this.fetchData();
     }
}
</script>

<style >

</style>