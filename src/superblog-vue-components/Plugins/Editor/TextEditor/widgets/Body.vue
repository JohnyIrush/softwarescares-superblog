<template>
    <div id="body" class="editor-height bg-color-darkblue card hide-x-overflow overflow-scroll" >
      <div class="row justify-content-center">
        <div class="col-12">
           <RichTextEditor></RichTextEditor>
        </div>
      </div>
    </div>
</template>

<script>
import RichTextEditor from './RichTextEditor'
export default {
    components:{
      RichTextEditor
    },
  Methods: {
  },
  created () {
  },
    
}
</script>

<style>
    
</style>