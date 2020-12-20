<template>
    <div id="header" class="header-height bg-color-dark">
        <div class="row justify-content-center">
            <div class="col-2">
              <sidebar></sidebar>
            </div>
            <div class="col-9">
                 <!--<topmenu></topmenu>--> 
                 <navbar></navbar>
            </div>
        </div>
    </div>
</template>

<script>
//import topmenu from './menus/horizontal-top-menu'
import navbar from "../widgets/menus/navbar";
import sidebar from "../widgets/Sidebar"
import Sidebar from './Sidebar.vue';

export default {
    components:{
        //topmenu
        navbar,
        sidebar
    }
}

        Sidebar</script>

<style>
    
</style>