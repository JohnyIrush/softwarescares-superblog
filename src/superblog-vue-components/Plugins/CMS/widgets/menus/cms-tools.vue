<template>
  <div class="col-12 accordion mt-1 Process-height bg-color-darkblue card">
    <toolsdiaplay></toolsdiaplay>
    <cmstoolslauncher></cmstoolslauncher>
  </div>  
</template>

<script>
import toolsdiaplay from '../Display/tools-display' 
import cmstoolslauncher from '../Launchers/cms-tool-launcher'
export default {
  components:{
    toolsdiaplay,
    cmstoolslauncher
  },
  props: {
  },
}
</script>

<style >

</style>