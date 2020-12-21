<template>
    <div id="CMS" class="Application-height p-0 responsive-page .container-fluid bg-color-darkblue">
       <div class="row">
         <div class="col">
            <Header></Header>
         </div>
       </div>
       <div class="row">
         <div  class="col-3">
            <Sidebar></Sidebar>
         </div>
         <div  class="col-9">
            <Body></Body>
         </div>
       </div>
       <div class="row">
        <div class="col">
          <Footer></Footer>
        </div>
       </div>
    </div>
</template>

<script>
import Header from './widgets/Header'
import Footer from './widgets/Footer'
import Body from './widgets/menus/body'
import Sidebar from './widgets/Sidebar'

export default {
      components:{
        Header,
        Footer,
        Body,
        Sidebar
      }
}
</script>

<style>

</style>