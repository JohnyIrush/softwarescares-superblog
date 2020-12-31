<template>
  <div>
    <div class="row justify-content-center ">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="tags-tbl-header">
                       <div class="tags-table-header-elements">
                         <p class="text-primary heading-style">Posts</p>
                       </div> 
                       <div class="tags-table-header-elements">
                         <button @click="postModal()"  type="button" class="btn btn-primary"> <i class="fa fa-plus" aria-hidden="true"></i> Add Post </button>
                       </div> 
                    </div>
                  </div>
             <table class="table table-striped">
               <thead>
                 <tr class="bg-primary">
                   <th scope="col" class="text-white">id</th>
                   <th scope="col" class="text-white">Title</th>
                   <th scope="col" class="text-white">Thumbnail</th>
                   <th scope="col" class="text-white">Description</th>
                   <th scope="col" class="text-white">Category</th>
                   <th scope="col" class="text-white">Action</th>
                 </tr>
               </thead>
               <tbody>
                <tr v-for="(Post, index) in Posts" :key="index" >
                    <th scope="row"> {{Post.id}}   </th>
                    <td> {{Post.title}} </td>
                    <td><img  :src="Post.thumbnail" alt="" srcset="" class="img-fluid bg-primary img-thumbnail product-img-size"> </td>
                    <td>{{Post.description}}</td>
                    <td>  {{Post.category}} </td>
                    <td class=""> 
                        <button @click="editPost(Post.id)" type="button" class="btn btn-info float-left mb-1 mr-1 text-white"> <i class="fa fa-edit" aria-hidden="true"></i> Edit</button> 
                        <button @click="editPostContent(Post.id)" class="btn btn-success text-white float-left mr-1" > Edit Post</button>  
                        <button class="btn btn-warning text-white float-left mr-1" > View Post</button>  
                        <button @click="deletePost(Post.id)" class="btn btn-danger text-white float-left" > Delete</button> 
                     </td> 
                </tr>    
               </tbody>
             </table>
            </div>
        </div>
    </div>
    <PostModal></PostModal>
  </div>
</template>

<script>

import PostModal from '../../../Editor/TextEditor/widgets/PostModal'

export default {
      components:{
        PostModal
      },
      data(){
         return{
           Posts: []
           ,
         }
      },
      methods:{
        editPostContent(id){
            this.$Post.setEditPostMode(1);
            this.$Post.setEditPostId(id);
            window.location.assign('/editor');
        },
        //launch Post modal
        postModal(){
          this.$Post.setEditPostMode(0);
          $('#PostModal').modal('show');
        },
        //delete Post
        deletePost(id){
         this.$swal({
           title: 'Are you sure?',
           text: "You won't be able to revert this!",
           icon: 'warning',
           showCancelButton: true,
           confirmButtonColor: '#3085d6',
           cancelButtonColor: '#d33',
           confirmButtonText: 'Yes, delete it!'
         }).then((result) => {

           if (result.value) {
              axios.post('/deletepost/' + id)
              .then(()=>{
                this.$swal({
                  position: 'top-end',
                  icon: 'success',
                  title: 'Post Deleted Successfully',
                  showConfirmButton: false,
                  timer: 1500
                }) 
           })

           }

         });

        },
        //edit Post
        editPost(id){
            Event.$emit('editPostMode',id);
            this.$Post.setEditPostMode(1);
            this.$Post.setEditPostId(id);
        },
        /**
         * Fetch Posts
        */
        fetchData(){
          axios.get('/getposts')
          .then((response)=>{
              this.Posts = response.data;
              console.log(this.Posts)
          })
        },
      },
      mounted(){
      this.fetchData();

      }
      }
</script>

<style>

</style>