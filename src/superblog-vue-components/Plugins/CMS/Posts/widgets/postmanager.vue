<template>
    <div class="row justify-content-center ">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="tags-tbl-header">
                       <div class="tags-table-header-elements">
                         <p class="text-primary heading-style">Posts</p>
                       </div> 
                       <div class="tags-table-header-elements">
                         <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-tag"> <i class="fa fa-plus" aria-hidden="true"></i> Add Post </button>
                       </div> 
                    </div>
                  </div>
             <table class="table table-striped">
               <thead>
                 <tr class="bg-primary">
                   <th scope="col" class="text-white">id</th>
                   <th scope="col" class="text-white">Title</th>
                   <th scope="col" class="text-white">Image</th>
                   <th scope="col" class="text-white">Price</th>
                   <th scope="col" class="text-white">description</th>
                   <th scope="col" class="text-white">Category</th>
                   <th scope="col" class="text-white">Action</th>
                 </tr>
               </thead>
               <tbody>
                <tr  >
                    <th scope="row"> 1  </th>
                    <td> test </td>
                    <td>test <img  src="" alt="" srcset="" class="img-fluid bg-primary img-thumbnail product-img-size"> </td>
                    <td>test</td>
                    <td>  test </td>
                    <td> test </td>
                    <td class=""> 
                        <a href="#" type="button" class="btn btn-info float-left mb-1 mr-1 text-white"  data-toggle="modal" data-target="#edit-tag"> <i class="fa fa-edit" aria-hidden="true"></i> Edit</a> 
                        <button  class="btn btn-danger text-white float-left" > Delete</button>  
                        <button class="btn mt-2 btn-success text-white float-left" > Edit About</button>  
                     </td> 
                </tr>    
               </tbody>
             </table>
            </div>
        </div>
    </div>
</template>

<script>

export default {
      components:{

      }

      }
</script>

<style>

</style>