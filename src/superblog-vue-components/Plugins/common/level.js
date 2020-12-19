export default{
    data(){
        return {
            levels:{ 
                level(levelIndicator, size, capacity, bgcolor){
                    //alert(levelIndicator + size + bgcolor +capacity);
                  const levelBlock = document.querySelector(levelIndicator);
                  console.log(levelBlock);
                  const level = (size/capacity) * 100;
                  //alert(level);
                  levelBlock.style.width = level + '%';
                  //alert(level + '%'); 
                  levelBlock.style.backgroundColor = bgcolor;
                }
            }
        }
    },
    methods: {

    },
}