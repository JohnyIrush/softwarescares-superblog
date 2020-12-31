<template>
 <div class="modal fade" id="CategoryModal"  data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content bg-color-darkblue">
      <form @submit.prevent="categoryEditMode ? updateCategory() : saveCategory()">
       <div class="modal-header">
         <h5 class="modal-title text-primary" id="PostModalTitle">Category</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span class="text-danger" aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
           <!--Category-->
          <div class="form-group">
            <label for="PostTitle" class="text-white">Category</label>
            <input name="title" v-model="CategoryDetails.category" type="text" class="form-control" id="CategoryTitle" aria-describedby="emailHelp">
            <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
          </div>
          <!--Category Description-->
          <div class="form-group">
            <label class="text-white" for="description">Description</label>
            <input name="description" v-model="CategoryDetails.description" type="text" class="form-control" id="description">
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

export default {
    components:{

    },
    data(){
        return {
            CategoryDetails:{
                category: '',
                description: '',
            },
            categoryEditMode: this.$Post.returnEditCategoryMode() ,
         }
        },
  computed:{
 
  },
  methods: {
      //edit Category
      updateCategory(){
         const Category = {
             category: this.CategoryDetails.category,
             description: this.CategoryDetails.description,
         }

         axios.post('/updatecategory/' + this.$Post.returnEditCategoryId(),Category)
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
      },
     //Save Post To the database
     saveCategory(){
         const Category = {
             category: this.CategoryDetails.category,
             description: this.CategoryDetails.description,
         }

         axios.post('/storecategory',Category)
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
        
     }
  },
mounted() {
    Event.$on('editCategoryMode',(id)=>{
          axios.get('/showcategory/' + id)
          .then((response)=>{

              this.CategoryDetails = response.data;
              console.log('edit Category Details: ' + this.CategoryDetails);
          })

          $('#CategoryModal').modal('show');
    })

    
},
    
}
</script>