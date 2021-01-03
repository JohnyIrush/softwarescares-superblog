<template>
    <div id="CMS" class="Application-height  .container-fluid bg-color-darkblue overflow-scroll hide-x-overflow">
      <ThreeGridDisplay :displaydetails="displaydetails" ></ThreeGridDisplay>
    </div>
</template>

<script>
import ThreeGridDisplay from './widgets/grids/Three-grid-display'

export default {
      components:{
       ThreeGridDisplay
      }
      ,
      data(){
        return{
          displaydetails:{
            category: 3,
            pagination: 6
          }
        }
      }

      }
</script>

<style>

</style>