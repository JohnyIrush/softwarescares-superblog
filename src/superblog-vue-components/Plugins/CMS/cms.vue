<template>
    <div id="CMS" class="Application-height p-0 responsive-page .container-fluid bg-color-darkblue">
       <div class="row">
         <div class="col">
            <Header></Header>
         </div>
       </div>
       <div class="row align-items-end no-gutters">
         <div  class="col-3 ">
            <sidebar></sidebar>
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

export default {
      components:{
        Header,
        Footer,
        Body
      }
}
</script>

<style>

</style>