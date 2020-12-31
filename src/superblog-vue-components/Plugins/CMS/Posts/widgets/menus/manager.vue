<template>
  <div class="row mt-1">
    <div class="card col-12 bg-color-darkblue">

        <div class="card-header bg-color-red col-12">
           <ul class="nav nav-pills">
             <li class="nav-item mr-5"><a href="#post" class="nav-link heading-color link-color payment-method-link-color active show" data-toggle="tab">Post</a></li>
             <li class="nav-item"><a href="#category" class="nav-link heading-color link-color payment-method-link-color " data-toggle="tab">Category</a></li>
           </ul>
        </div>

        <div class="card-body">
          <div class="tab-content">
            <!-- post Tab -->
            <div class="tab-pane active show" id="post">
              <div class="flex-center ">
                 <Posts></Posts>
              </div>
            </div>
            <!-- category Tab -->
            <div class="tab-pane " id="category">
               <Categories></Categories>
            </div>
          </div>
        </div>

    </div>
  </div>
</template>

<script>

import Posts from '../../Posts'
import Categories from '../categorymanager'

export default {
    components:{
       Posts,
       Categories
    },
  Methods: {
  },
  created () {
  },
    
}
</script>

<style>
    
</style>