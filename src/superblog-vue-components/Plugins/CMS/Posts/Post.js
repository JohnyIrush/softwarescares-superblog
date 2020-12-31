export default class Editor {
    constructor() {
        //Categories
        this.editCategoryId = localStorage.getItem("editCategoryId") ? localStorage.getItem("editCategoryId") : null; //store category id
        this.editCategoryMode = localStorage.getItem("editCategoryMode") ? localStorage.getItem("editCategoryMode") : 0; //set category edit mode
        //Posts
        this.editPostId = localStorage.getItem("editPostId") ? localStorage.getItem("editPostId") : null; //store post id
        this.editPostMode = localStorage.getItem("editPostMode") ? localStorage.getItem("editPostMode") : 0; //set post edit mode

    }
   
    /**
     * set the current Category
     *  To Be Edited 
    */
    setEditCategoryId(id){
        localStorage.setItem("editCategoryId", id);
    }
    
    /**
     * return id of category to be edited
    */

    returnEditCategoryId(){
        return Number(localStorage.getItem('editCategoryId'));
    }

    /**
     * set Category Mode
    */
   setEditCategoryMode(mode){
    localStorage.setItem("editCategoryMode", mode);
}

    /**
     * set Category Mode
    */
   returnEditCategoryMode(){
      if (Number((localStorage.getItem("editCategoryMode"))) == 1) {
         return true;
      }
      else{
          return false;
      }
}

/**
 * Posts Management
*/

    /**
     * set the current Post
     *  To Be Edited 
    */
   setEditPostId(id){
    localStorage.setItem("editPostId", id);
}

/**
 * return id of Post to be edited
*/

returnEditPostId(){
    return Number(localStorage.getItem('editPostId'));
}

/**
 * set Post Mode
*/
setEditPostMode(mode){
localStorage.setItem("editPostMode", mode);
}

/**
 * set Post Mode
*/
returnEditPostMode(){
  if (Number((localStorage.getItem("editPostMode"))) == 1) {
     return true;
  }
  else{
      return false;
  }
}

}