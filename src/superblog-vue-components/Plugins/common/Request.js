export default{
    data(){
        return {
            feedbackMessages:{ 
                successMsg(msg){
                    Vue.$toast.success(msg,{
                        position: 'top'
                    });
                },
                errorMsg(msg){
                    Vue.$toast.error(msg,{
                        position: 'top'
                    }); 
                },
                requestResultMsg(checker,Success,Failure){
                            if (Boolean(checker)==true) {
                                
                            }
                            else{

                            }
                },
                //success msg using sweet alert
                successMsgSW(msg){
                    this.$swal({
                        position: 'top-end',
                        icon: 'success',
                        title: msg,
                        showConfirmButton: false,
                        timer: 3000
                      })
                },

                //error msg using sweet alert
                errorMsgSW(msg){
                    this.$swal({
                        icon: 'error',
                        title: 'Oops...',
                        text: msg,
                      })
                }
            }
        }
    },
    methods: {
        //fetch Data
        fetchData(url){
          axios.get(url)
          .then((response)=>{
              return response.data.data;
          })
        },
        sendRequest(method,url,data){
            try{
               return axios({
                    method: method,
                    url: url,
                    data: data
                })
            } catch(e){
               return "Request Errors: " +  e.response
            }
        },
    },
}