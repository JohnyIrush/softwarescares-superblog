export default class Editor {
    constructor() {
        this.currentProductId = localStorage.getItem("currentProductId") ? localStorage.getItem("currentProductId") : null;
        this.readyPost = localStorage.getItem("readyPost") ? localStorage.getItem("readyPost") : null; //store post that is ready to be saved
    }
   
    /**
     * set the current Product
     *  To Be Edited 
    */
    setCurrentProductid(id){
        localStorage.setItem("currentProductId", id);
    }

    setElementHeight(Class){
      //var EPlate = document.querySelectorAll('.'+Class);
      ////EPlate.style.Height = '500vh';
      //console.log(EPlate[0]);
    } 

    saveReadyPost(Post){
        localStorage.setItem("readyPost", Post);
    }

    returnReadyPost(){
        return localStorage.getItem('readyPost');
    }
}