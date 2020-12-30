<template>
  <div class="col-12">
         <div class="card-header ">
          <!--edit toolbars-->
          <editor-menu-bar :editor="editor" v-slot="{ commands, isActive }">
           <ul class="nav">

               <!--Bold Style-->
             <li class="nav-item m-1">
              <button class="bg-primary text-white" :class="{ 'is-active': isActive.bold() }" @click="commands.bold"> <i class="fa fa-bold" aria-hidden="true"></i> Bold</button>
             </li>

               <!--Heading styles-->
             <li class="nav-item m-1">
              <button class="bg-primary text-white" @click="collapseMenu('#headings')" > <i class="fas fa-heading    "></i> Headings</button>
               <!--Heading Collapse Menu-->
               <ul id="headings" class="nav flex-column collapse">
                   <!--H1-->
                  <li class="nav-item">
                    <button class="bg-primary text-white" :class="{ 'is-active': isActive.heading({ level: 1 }) }" @click="commands.heading({ level: 1 })">H1</button>
                  </li>
                  <!--H2-->
                  <li class="nav-item">
                   <button class="bg-primary text-white" :class="{ 'is-active': isActive.heading({ level: 2 }) }" @click="commands.heading({ level: 2 })">H2</button>
                  </li>
                  <!--H3-->
                  <li class="nav-item">
                    <button class="bg-primary text-white" :class="{ 'is-active': isActive.heading({ level: 3 }) }" @click="commands.heading({ level: 3 })">H3</button>
                  </li>
               </ul>
             </li>
             <!--lists-->
             <li class="nav-item m-1">
               <button class="bg-primary text-white" @click="collapseMenu('#lists')" > <i class="fa fa-list" aria-hidden="true"></i> Lists</button>
               <!--List collapse Menu-->
               <ul id="lists" class="nav flex-column collapse">
                   <!--Ordinary List-->
                  <li class="nav-item">
                    <!--<button class="bg-primary text-white" :class="{ 'is-active': isActive.ListItem() }" @click="commands.ListItem()">Ordinary List</button>-->
                  </li>
                  <!--Orderlist-->
                  <li class="nav-item">
                    <button class="bg-primary text-white" :class="{ 'is-active': isActive.ordered_list() }" @click="commands.ordered_list" >Orderred List</button>
                  </li>
                  <!--Bullet List-->
                  <li class="nav-item">
                    <button class="bg-primary text-white" :class="{ 'is-active': isActive.bullet_list() }" @click="commands.bullet_list"><i class="fas fa-list-alt    "></i> Bullet List</button>
                  </li>
               </ul>
             </li>

             <!--Italic-->
             <li class="nav-item m-1">
               <button class="bg-primary text-white" :class="{ 'is-active': isActive.italic() }" @click="commands.italic()"> <i class="fa fa-italic" aria-hidden="true"></i> Italic </button>
             </li>

             <!--Paragraph-->
             <li class="nav-item m-1">
               <button class="menubar__button bg-primary text-white" :class="{ 'is-active': isActive.paragraph() }" @click="commands.paragraph"> <i class="fa fa-paragraph" aria-hidden="true"></i> Paragraph </button>
             </li>

             <!--underline-->
             <li class="nav-item m-1">
               <button class="bg-primary text-white" :class="{ 'is-active': isActive.underline() }" @click="commands.underline()"> <i class="fa fa-underline" aria-hidden="true"></i>Underline </button>
             </li>

             <!--strike-->
             <li class="nav-item m-1">
               <button class="bg-primary text-white" :class="{ 'is-active': isActive.strike() }" @click="commands.strike()"> <i class="fa fa-strikethrough" aria-hidden="true"></i> strike </button>
             </li>

             <!--Blockquote-->
             <li class="nav-item m-1">
               <button class="bg-primary text-white" :class="{ 'is-active': isActive.blockquote() }" @click="commands.blockquote()"> <i class="fa fa-quote-right" aria-hidden="true"></i> Blockquote </button>
             </li>

             <!--Image-->
             <li class="nav-item m-1">
              <button class="menubar__button bg-primary text-white" @click="showImagePrompt(commands.image)"><i class="fas fa-image    "></i>Image </button>
             </li>
           </ul>
          </editor-menu-bar>
          <!--Second Toolbar -->
           <editor-menu-bar :editor="editor" v-slot="{ commands, isActive }">
           <ul class="nav">
             <li class="nav-item">
               <!--Table Creation Button-->
					     <button class="bg-primary text-white" @click="commands.createTable({rowsCount: 3, colsCount: 3, withHeaderRow: false })"> <i class="fa fa-table" aria-hidden="true"></i> Table </button>
					       <span v-if="isActive.table()">
					       	<button class="menubar__button bg-primary text-danger" @click="commands.deleteTable"> <i class="fa  fa-trash" aria-hidden="true"></i>tabel </button>

					       	<button class="menubar__button bg-primary text-success " @click="commands.addColumnBefore"> <i class="fa fa-plus  " aria-hidden="true"></i>Col Before </button>

					       	<button class="menubar__button bg-primary text-success " @click="commands.addColumnAfter"> <i class="fa fa-plus " aria-hidden="true"></i>Col After</button>

					        <button class="menubar__button bg-primary text-danger " @click="commands.deleteColumn"> <i class="fa fa-trash" aria-hidden="true"></i>Col</button>

					       	<button class="menubar__button bg-primary text-success " @click="commands.addRowBefore"> <i class="fa fa-plus" aria-hidden="true"></i>Row Before  </button>
                   
					       	<button class="menubar__button bg-primary text-success "	@click="commands.addRowAfter"> <i class="fa fa-plus" aria-hidden="true"></i>Row After </button>

                   <button class="menubar__button bg-primary text-danger " @click="commands.deleteRow">  <i class="fa fa-trash bg-primary text-danger" aria-hidden="true"></i>Row </button>

					       	<button class="menubar__button bg-primary text-white"	@click="commands.toggleCellMerge">  <i class="fa fa-toggle-on " aria-hidden="true"></i>Cell Merge </button>
					       </span>
             </li>  
             <li class="nav-item">
              <div class="menubar">
                <button class="menubar__button bg-primary text-white" @click="commands.undo"> <i class="fa fa-undo" aria-hidden="true"></i> </button>
                <button class="menubar__button bg-primary text-white" @click="commands.redo"> <i class="fas fa-redo    "></i> </button>
              </div>
             </li>
             <li class="nav-item">
                        <!--Link Generator-->
         <editor-menu-bubble class="menububble" :editor="editor" @hide="hideLinkMenu" v-slot="{ commands, isActive, getMarkAttrs, menu }">
               <div
                 class="menububble"
                 :class="{ 'is-active': menu.isActive }"
                 :style="`left: ${menu.left}px; bottom: ${menu.bottom}px;`"
               >

                 <form class="menububble__form" v-if="linkMenuIsActive" @submit.prevent="setLinkUrl(commands.link, linkUrl)">
                   <input class="menububble__input" type="text" v-model="linkUrl" placeholder="https://" ref="linkInput" @keydown.esc="hideLinkMenu"/>
                   <button class="menububble__button text-danger bg-primary" @click="setLinkUrl(commands.link, null)" type="button">
                     <i class="fas fa-trash    "></i>
                   </button>
                 </form>

                 <template v-else>
                   <button 
                     class="menububble__button text-success bg-primary"
                     @click="showLinkMenu(getMarkAttrs('link'))"
                     :class="{ 'is-active': isActive.link() }"
                   >
                     <span>{{ isActive.link() ? 'Update Link' : 'Add Link'}}</span>
                     <i class="fa fa-link" aria-hidden="true"></i>
                   </button>
                 </template>

               </div>
         </editor-menu-bubble>  
             </li>
           </ul>
          </editor-menu-bar>  
         </div>
          <!--editor Body-->
         <div v-show="false" class="card-body editor-window text-window-color">
            <editor-content id="editor"  class="editor bg-white Ta-hieght editor__content " :editor="editor" />                                                                      
         </div> 
  </div>           
</template>
<script>

import { Editor, EditorContent, EditorMenuBar, EditorMenuBubble } from 'tiptap'
import {
  Blockquote,
  CodeBlock,
  HardBreak,
  Heading,
  Image,
  OrderedList,
  BulletList,
  ListItem,
  TodoItem,
  TodoList,
  Bold,
  Code,
  Italic,
  Link,
  Strike,
  Underline,
  History,
  Table,
	TableHeader,
	TableCell,
	TableRow,
} from 'tiptap-extensions'

export default {
  components: {
    EditorMenuBar,
    EditorContent,
    EditorMenuBubble,
  },
  data() {
    return {
      editor: new Editor({
        extensions: [
          new Blockquote(),
          new CodeBlock(),
          new HardBreak(),
          new Heading({ levels: [1, 2, 3] }),
          new BulletList(),
          new OrderedList(),
          new ListItem(),
          new TodoItem(),
          new TodoList(),
          new Bold(),
          new Code(),
          new Italic(),
          new Link(),
          new Strike(),
          new Underline(),
          new History(),
          new Image(),
					new Table({
						resizable: true,
					}),
					new TableHeader(),
					new TableCell(),
          new TableRow(),
        ],
        content: ''
      }),
      linkUrl: null,
      linkMenuIsActive: false,
    }
  },
  beforeDestroy() {
    this.editor.destroy()
  },
  methods: {
    /**
     * Reading Media
    */
   readMedia(){
       axios.get('/media')
       .then((data)=>{
          console.log(data);
       })
       .catch(()=>{
         //alert('problem reading Media');
       })
   },
     /**Link*/
    showLinkMenu(attrs) {
      this.linkUrl = attrs.href
      this.linkMenuIsActive = true
      this.$nextTick(() => {
        this.$refs.linkInput.focus()
      })
    },
    hideLinkMenu() {
      this.linkUrl = null
      this.linkMenuIsActive = false
    },
    setLinkUrl(command, url) {
      command({ href: url })
      this.hideLinkMenu()
    },
     /**Link */

    /**
     * Image Insertion
    */
    showImagePrompt(command) {
      //const src = prompt('Enter the url of your image here')
      //Launch Uploader
      this.$Uploader.launchUploader();
      const src = '/Images/' + this.$Uploader.getUploadedImage();
      if (src !== null) {
        command({ src })
      }
      
    },
    /**
     * Fetch Product about
     * and pass to editor 
     * for editting
    */
      fetchAbout(){
         axios.get('/showproductdata/' + Number(localStorage.currentProductId))
         .then((data)=>{
            //alert('Data was fetched successfully in the database');
            //console.log(data.data.about);
            this.editor.setContent(data.data.about,true,true);
         })
         .catch(()=>{
            //alert('There was an error fetching Data from the database')
         })
      },
    /**
     * Store The Html data
     * to database
    */
      saveData(){
         const data = {
           id: Number(localStorage.currentProductId),
           about: this.editor.getHTML()
         }
          
         axios.post('/saveproductabout/' + data.id,data)
         .then(()=>{
              this.$swal({
                position: 'top-end',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500
              })
              setTimeout(() => {
                $('#edit-view').modal('show');
              }, 1500);
         })
         .catch(()=>{
            //alert('There was an error Saving Data to the database')
         })
      },
      /**
       * Collapse Menu
       * Trigger
      */
     collapseMenu(id){
         $(id).collapse('toggle');
     },
      returnData(){
          //alert(this.content)
          console.log(this.content)
      },
  },
  mounted() {
      //alert(this.editor.getHTML())
      this.fetchAbout();
      this.readMedia()

      Event.$on('img_uploaded',()=>{
        this.showImagePrompt();
      })
  },
}
</script>

<style>

/**Table Styling*/
.editor__content table td, .editor__content table th { 
  min-width: 1em; 
  border: 2px solid #ddd; 
  padding: 3px 5px; 
  vertical-align: top;
   -webkit-box-sizing: border-box;
    box-sizing: border-box; 
    position: relative;
}

</style>