<template>
    <div id="Teditor" class="editor-height p-0 responsive-page .container-fluid bg-color-darkblue">
       <div class="row">
         <div  class="col-4">
            <Sidebar></Sidebar>
         </div>
         <div  class="col-8">
            <Body></Body>
         </div>
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