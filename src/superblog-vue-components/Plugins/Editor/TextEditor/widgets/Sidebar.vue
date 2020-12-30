<template>
  <div class="card col-12 bg-color-red editor-height">
    
   <div class="row">
     <ul class="nav flex-column">
       <li class="nav-item">
         <a class="nav-link" href="/medialibrary">Media Library</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="/cms">CMS</a>
       </li>
     </ul>     
   </div>
   <techEditorMenu></techEditorMenu>

  </div>   
</template>

<style >
    
</style>

<script>
import techEditorMenu from './menus/Tech-editor-menu'
export default {
    components:{
        techEditorMenu
    },
  methods: {

  },
mounted() {

},
    
}
</script>