<template>
    <div id="CMS" class="Application-height p-0 responsive-page .container-fluid bg-color-darkblue">
       <div class="row">
         <div class="col">
            <Header></Header>
         </div>
       </div>
       <div class="row">
         <div id="sidebar-window-box" class="col-3 collapse show">
            <Sidebar></Sidebar>
         </div>
         <div id="minsidebar-window-box" class="col-1 collapse">
            <MinSidebar></MinSidebar>
         </div>
         <div id="body-window-box" class="col-9 collapse show">
            <Body></Body>
         </div>
         <div id="maxbody-window-box" class="col-11 collapse">
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
import MinSidebar from './widgets/MinSidebar'
import Editor from '../Editor/TextEditor/Editor.vue'

export default {
      components:{
        Header,
        Footer,
        Body,
        Sidebar,
        MinSidebar
      }

      }
</script>

<style>

</style>