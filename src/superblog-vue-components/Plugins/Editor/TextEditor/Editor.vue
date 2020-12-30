<template>
   <div id="Teditor"  class="row p-0 responsive-page editor-height bg-color-darkblue">
         <div  class="col-4">
            <Sidebar></Sidebar>
         </div>
         <div  class="col-8">
            <Body></Body>
         </div>
   </div>
</template>

<script>
import Body from './widgets/Body'
import Sidebar from './widgets/Sidebar'

export default {
      components:{
        Body,
        Sidebar
      }
}
</script>

<style>

</style>