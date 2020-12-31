<template>
 <div>
    <div class="row justify-content-center ">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="tags-tbl-header">
                       <div class="tags-table-header-elements">
                         <p class="text-primary">Categories</p>
                       </div> 
                       <div class="tags-table-header-elements">
                         <button @click="categoryModal()" type="button" class="btn btn-primary"> <i class="fa fa-plus" aria-hidden="true"></i> Add Category </button>
                       </div> 
                    </div>
                  </div>
             <table class="table table-striped">
               <thead>
                 <tr class="bg-primary">
                   <th scope="col" class="text-white">id</th>
                   <th scope="col" class="text-white">Category</th>
                   <th scope="col" class="text-white">Thumbnail</th>
                   <th scope="col" class="text-white">Description</th>
                   <th scope="col" class="text-white">Action</th>
                 </tr>
               </thead>
               <tbody>
                <tr v-for="(Category, index) in Categories" :key="index" >
                    <th scope="row"> {{Category.id}}   </th>
                    <td> {{Category.category}} </td>
                    <td><img  :src="Category.thumbnail" alt="" srcset="" class="img-fluid bg-primary img-thumbnail product-img-size"> </td>
                    <td>{{Category.description}}</td>
                    <td class=""> 
                        <button @click="editCategory(Category.id)" type="button" class="btn btn-info float-left mb-1 mr-1 text-white"> <i class="fa fa-edit" aria-hidden="true"></i> Edit</button> 
                        <button @click="deleteCategory(Category.id)" class="btn btn-danger text-white float-left" > Delete</button>  
                     </td> 
                </tr>    
               </tbody>
             </table>
            </div>
        </div>
    </div>
    <CategoryModal></CategoryModal>
 </div>
</template>

<script>
import CategoryModal from './categoryModal'
export default {
      components:{
            CategoryModal
      },
      data(){
         return{
           Categories: [],
           preCategory: []
           ,
         }
      },
  computed:{

  },
      methods:{
        //delete category
        deleteCategory(id){
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
              axios.post('/deletecategory/' + id)
              .then(()=>{
                this.$swal({
                  position: 'top-end',
                  icon: 'success',
                  title: 'Category Deleted Successfully',
                  showConfirmButton: false,
                  timer: 1500
                }) 
           })

           }

         });

        },
        //edit Category
        editCategory(id){
            Event.$emit('editCategoryMode',id);
            this.$Post.setEditCategoryMode(1);
            this.$Post.setEditCategoryId(id);
        },
        //Launch Category Modal
        categoryModal(){
           $('#CategoryModal').modal('show');
        },
        /**
         * Fetch Categories
        */
        fetchData(){
          axios.get('/getcategories')
          .then((response)=>{
              this.Categories = response.data;
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