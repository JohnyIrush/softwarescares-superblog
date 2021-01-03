<template>
  <div class="col-4 mt-3">
   <div class="card bg-color-dark">
     <div class="card-body">
        <img :src="Post.thumbnail" alt="" class="img-fluid" srcset="">
     </div>
     <div class="card-body bg-color-red post-plate-overlay text-center">
        <a href="#"> <h3 class="card-title text-primary">{{Post.title}}</h3> </a>
      <p class="card-text text-white"> {{Post.description}} </p>
      <a href="#" class="btn btn-primary">View Post</a>
     </div>
   </div>
  </div>
</template>

<script>


export default {
  props: ['Post'],
      components:{

      }

      }
</script>

<style>
/*** Position ***/
.post-plate-overlay{
    margin-top: -35%;
}

/*** layout ***/
.post-plate-overlay{
    margin-left: 10%;
    margin-right: 10%;
}
</style>