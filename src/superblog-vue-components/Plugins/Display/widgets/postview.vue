<template>
  <div class="col-12 mt-3">
   <div class="card">
     <div class="card-body">
       <div v-html="Post">
           
       </div>
     </div>
   </div>
  </div>
</template>

<script>


export default {
      components:{

      },
    data() {
        return {
            Post: null,
        }
    },
    methods: {
        fetchPost(){
            axios.get('/showpost/' + this.$PostDisplay.returnViewPostId())
            .then((data)=>{
               this.Post = data.data.post;
               //console.log(this.about)
            })
            .catch(()=>{
                alert('problem fetching about')
            })
        }
    },

    mounted(){
      this.fetchPost();
    }
      }
</script>

<style>

</style>