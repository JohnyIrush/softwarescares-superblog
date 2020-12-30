export default{
    data(){
        return {

        }
    },
    methods: {
      //Minimize window ,oldWindowBoxId,newWindowBoxId,oldWindowBoxCol,newWindowBoxCol,oldWindowBoxOldCol,newWindowBoxOldCol
      minimizeWindow(defaultWindowOneId,defaultWindowOneReplacerId,defaultWindowTwoId,defaultWindowTwoReplacerId){
          //const oldWindow = document.getElementById('#'+oldWindowId);
          //const oldWindowBox = document.getElementById('#'+oldWindowReplacerId);
          $('#'+defaultWindowOneId).collapse('toggle');
          $('#'+defaultWindowOneReplacerId).collapse('toggle');
          $('#'+defaultWindowTwoId).collapse('toggle');
          $('#'+defaultWindowTwoReplacerId).collapse('toggle');
      }
    },
}