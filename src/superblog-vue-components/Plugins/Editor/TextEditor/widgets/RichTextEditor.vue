<template>
  <div class="col-12">
         <div class="card-header bg-color-red toolbar-size">
          <!--edit toolbars-->
          <editor-menu-bar :editor="editor" v-slot="{ commands, isActive }">
           <ul class="nav">

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

             <!--Paragraph-->
             <li class="nav-item m-1">
               <button class="menubar__button bg-primary text-white" :class="{ 'is-active': isActive.paragraph() }" @click="commands.paragraph"> <i class="fa fa-paragraph" aria-hidden="true"></i> Paragraph </button>
             </li>

             <!--Image-->
             <li class="nav-item m-1">
              <button class="menubar__button bg-primary text-white" @click="showImagePrompt(commands.image)"><i class="fas fa-image    "></i>Image </button>
             </li>

             <!--Table-->
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

             <!--Link-->
             <li class="nav-item ml-2">
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

          <!--Second Toolbar -->
           <editor-menu-bar :editor="editor" v-slot="{ commands, isActive }">
           <ul class="nav">
             <!--Italic-->
             <li class="nav-item m-1">
               <button class="bg-primary text-white" :class="{ 'is-active': isActive.italic() }" @click="commands.italic()"> <i class="fa fa-italic" aria-hidden="true"></i> Italic </button>
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

             <li class="nav-item">
              <div class="menubar">
                <button class="menubar__button bg-primary text-white" @click="commands.undo"> <i class="fa fa-undo" aria-hidden="true"></i> </button>
                <button class="menubar__button bg-primary text-white" @click="commands.redo"> <i class="fas fa-redo    "></i> </button>
              </div>
             </li>
           </ul>
          </editor-menu-bar>  
         </div>
         <!--editor Body-->
         <div class="card-body editor-window text-window-color">
            <editor-content id="editor"  class="editor bg-white Ta-hieght editor__content " :editor="editor" />      
            <Uploader></Uploader>  
            <editorview></editorview>       
            <PostModal></PostModal>                                                           
         </div> 
         <!--editor Footer-->
         <div class="card-footer text-center bg-primary">
            <div class="row">
             <div class="col">
                 <p class="text-white">editting....</p>
             </div>
             <div class="col">
                
             </div> 
             <div class="col">
                <button @click="postEditMode ? updatePost() : saveData()" class="btn btn-success text-white">Save Changes</button>
             </div>
             <div class="#editor" ></div> 
            </div> 
         </div>
  </div>           
</template>
<script>

import PostModal from './PostModal'
import editorview from './editorview'
//Media Uploader
import Uploader from './MediaUpload/Upload'
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
import EditorContentMenu from './menus/editor-content-menu'

export default {
  components: {
    EditorMenuBar,
    EditorContent,
    EditorMenuBubble,
    Uploader,
    editorview,
    EditorContentMenu,
    PostModal
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
      postEditMode: this.$Post.returnEditPostMode() ,
    }
  },
  beforeDestroy() {
    this.editor.destroy()
  },
  methods: {
      //edit Post
      updatePost(){
         const Post = {
             post: this.editor.getHTML(),
         }

         axios.post('/updatepostcontent/' + this.$Post.returnEditPostId(),Post)
         .then(()=>{
              this.$Post.setEditPostMode(0);
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
            alert('There was an error Saving Data to the database')
         })
      },
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
     * Fetch Post Content
     * and pass to editor 
     * for editting
    */
      fetchPostContent(){
         if (this.postEditMode==true) {
             axios.get('/showpost/' + this.$Post.returnEditPostId())
             .then((response)=>{
                 alert(response.data.post)
                 this.editor.setContent(response.data.post,true,true);
             })
         }
      },
    /**
     * Store The Html data
     * to database
    */
      saveData(){
        this.$Editor.saveReadyPost(this.editor.getHTML());
        $('#PostModal').modal('show');
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
      this.fetchPostContent();
      this.readMedia()

      Event.$on('img_uploaded',()=>{
        this.showImagePrompt();
      })




  },
}
</script>

<style>


.editor
    {
	border:solid 1px #ccc;
	padding: 20px;
    min-height: 60vh;
    }

#Toolbars{
    position: fixed;
    z-index: 1;
}

.text-window-color{
    background-color: rgb(12, 12, 22);
}
/**Toolbar Size*/
.toolbar-size{
    min-height: 20vh;
}

/**Table Styling*/
.editor__content table td, .editor__content table th { 
  min-width: 1em; 
  border: 2px solid #ddd; 
  padding: 3px 5px; 
  vertical-align: top;
   -webkit-box-sizing: border-box;
    box-sizing: border-box; 
    position: relative; }

/*** Editor Width ***/
    .editor-window{
      width: 1000px;
    }
</style>