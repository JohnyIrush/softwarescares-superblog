<template>
  <div class="col-12 mt-1 Process-height bg-color-darkblue card">
    <div class="row">
      <div class="col-12 rec-frame-height bg-color-red">
          <h1 class="text-primary text-center">CMS Tools</h1>
      </div>
    </div>
    <toolsdiaplay></toolsdiaplay>
    <div class="row  mt-3 mb-3 justify-content-center">
      <!--Tech Editor Launcher-->
     <div class="col-sm-4">
      <div class="card bg-color-dark">
        <div class="card-header">
          <h5 class="card-title plugin-name text-primary">E-Tech</h5>
        </div>
        <div class="card-body">
            <img src="/storage/images/super.png" class="img-fluid plugin-size" alt="" srcset="">
          <p class="card-text">Rich Text Editor</p>
        </div>
        <div class="card-footer">
          <a href="/editor" class="btn btn-primary text-white" type="button">Launch Text Editor </a>
        </div>
      </div>
     </div>

   <div class="col-sm-4">
    <div class="card bg-color-dark">
      <div class="card-header">
        <h5 class="card-title plugin-name text-primary">Post Manager</h5>
      </div>
      <div class="card-body">
          <img src="/storage/images/TeckSkills.png" class="img-fluid plugin-size" alt="" srcset="">
        <p class="card-text">Post Manager</p>
      </div>
      <div class="card-footer">
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#E-Posts" aria-expanded="false" aria-controls="multiCollapseExample2">Launch Post Manager</button>
      </div>
    </div>
   </div>
   <div class="col-sm-4">
    <div class="card bg-color-dark">
      <div class="card-header">
        <h5 class="card-title plugin-name text-primary"> Tech-Rocket </h5>
      </div>
      <div class="card-body">
          <img src="/storage/images/Newsletter.png" class="img-fluid plugin-size" alt="" srcset="">
        <p class="card-text">Newsletter and Emails</p>
      </div>
      <div class="card-footer">
        <button class="btn btn-primary text-white"> Launch Text Editor </button>
      </div>
    </div>
   </div>
    </div>
  </div>  
</template>

<script>
export default {
  components:{
  },
  props: {
  },
}
</script>

<style >

</style>