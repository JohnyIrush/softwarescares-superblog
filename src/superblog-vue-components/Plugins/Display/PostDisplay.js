export default class PostDisplay {
    constructor() {
        //Posts
        this.viewPostId = localStorage.getItem("viewPostId") ? localStorage.getItem("viewPostId") : null; //store post id

    }
   

/**
 * Posts Display
*/

 /**
  * set the current Post
  *  To Be Viewed
 */
setViewPostId(id){
 localStorage.setItem("viewPostId", id);
}

/**
 * return id of Post to be viewed
*/

returnViewPostId(){
    return Number(localStorage.getItem('viewPostId'));
}

}