<template>
  <div class="row mt-1">
    <div class="card col-12 bg-color-darkblue">

        <div class="card-header bg-color-red col-12">
           <ul class="nav nav-pills">
             <li class="nav-item mr-5"><a href="#widget" class="nav-link heading-color link-color payment-method-link-color active show" data-toggle="tab">Widgets</a></li>
             <li class="nav-item"><a href="#edit" class="nav-link heading-color link-color payment-method-link-color " data-toggle="tab">Edit</a></li>
           </ul>
        </div>

        <div class="card-body">
          <div class="tab-content">
            <!-- Widgets Tab -->
            <div class="tab-pane active show" id="widget">
              <div class="flex-center ">
                    
              </div>
            </div>
            <!-- Edit Tab -->
            <div class="tab-pane " id="edit">
              <div class='row justify-content-start'>
                <div class="card-header bg-color-red col-12">
                   <ul class="nav nav-pills">
                     <li class="nav-item mr-5"><a href="#content" class="nav-link heading-color link-color payment-method-link-color active show" data-toggle="tab">Widgets</a></li>
                     <li class="nav-item"><a href="#style" class="nav-link heading-color link-color payment-method-link-color " data-toggle="tab">Style</a></li>
                     <li class="nav-item"><a href="#advanced" class="nav-link heading-color link-color payment-method-link-color " data-toggle="tab">Advanced</a></li>
                   </ul>
                </div>
        
                <div class="card-body">
                  <div class="tab-content">
                    <!-- Content Tab -->
                    <div class="tab-pane active show" id="content">
                      <div class="flex-center ">
                       <!--<editorContentMenu></editorContentMenu>-->
                      </div>
                    </div>
                    <!-- Edit Tab -->
                    <div class="tab-pane " id="style">
                      <div class='row justify-content-start'>
                         Tab 2
                      </div>
                    </div>

                    <!-- Edit Tab -->
                    <div class="tab-pane " id="advanced">
                      <div class='row justify-content-start'>
                         Tab 3
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    </div>
  </div>
</template>

<script>

import editorContentMenu from './editor-content-menu'

export default {
    components:{
       editorContentMenu
    },
  Methods: {
  },
  created () {
  },
    
}
</script>

<style>
    
</style>