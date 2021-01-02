<template>
 <div class="modal fade" id="PostModal"  data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content bg-color-darkblue">
      <form @submit.prevent="postEditMode ? updatePost() : savePost()">
       <div class="modal-header">
         <h5 class="modal-title text-primary" id="PostModalTitle">Post Modal</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span class="text-danger" aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
           <!--Post Title-->
          <div class="form-group">
            <label for="PostTitle" class="text-white">Post Title</label>
            <input name="title" v-model="PostDetails.title" type="text" class="form-control" id="PostTitle" aria-describedby="emailHelp">
            <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
          </div>
          <!--Post Description-->
          <div class="form-group">
            <label class="text-white" for="description">Description</label>
            <textarea  name="description" v-model="PostDetails.description" class="form-control" id="description" rows="5"></textarea>
          </div>
          <!--Post Categories-->
          <div class="form-group">
            <label for="exampleFormControlSelect1">Select Category</label>
            <select name="category" v-model="PostDetails.category" class="form-control" id="exampleFormControlSelect1">
              <option v-for="(Category, index) in Categories" :key="index" :value="Category.id" > {{Category.category}} </option>
            </select>
          </div>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-primary">Submit</button>
       </div>
      </form>
     </div>
   </div>
 </div>
</template>

<style >
    
</style>

<script>

import categoriesSelection from '../../../CMS/Posts/widgets/menus/categoriesSelection'

export default {
    components:{
        categoriesSelection
    },
    data(){
        return {
            Categories: [],
            PostDetails:{
                title: '',
                description: '',
                category: ''
            },
            postEditMode: this.$Post.returnEditPostMode() ,
 
         }
        },
  methods: {

      //edit Post
      updatePost(){
         const Post = {
             title: this.PostDetails.title,
             description: this.PostDetails.description,
             category: this.PostDetails.category,
         }

         axios.post('/updatepost/' + this.$Post.returnEditPostId(),Post)
         .then(()=>{
              this.$swal({
                position: 'top-end',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500
              })
            this.$Post.setEditPostMode(0);
            this.$Post.setEditPostId(0);
         })
         .catch(()=>{
            alert('There was an error Saving Data to the database')
         })
      },
        /**
         * Fetch Categories
        */
        fetchData(){
          axios.get('/getcategories')
          .then((response)=>{
              this.Categories = response.data;
              console.log(response);
          })
        },
     //Save Post To the database
     savePost(){
         const Post = {
             title: this.PostDetails.title,
             description: this.PostDetails.description,
             category: this.PostDetails.category,
             post: this.$Editor.returnReadyPost()
         }

        alert(this.PostDetails.category)
         axios.post('/storepost',Post)
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
            alert('There was an error Saving Data to the database')
         })
        
         
         console.log(Post)
     }
  },
mounted() {
   this.fetchData();

    Event.$on('editPostMode',(id)=>{

          axios.get('/showpost/' + id)

          .then((response)=>{

              this.PostDetails = response.data;

          })

          $('#PostModal').modal('show');
    })

},
    
}
</script>