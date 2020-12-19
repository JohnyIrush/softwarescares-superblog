<template>
<div class="disk">
  <div class="free level">50%</div>
</div>
</template>

<script>
export default {
    props: ['props'],
    methods:{
     //Get Disk Capacities
     async getCapacity(){
      const res = await this.sendRequest('get','capacity');
      console.log(res);
     }

    },
    mounted(){
    this.levels.level('.level',5,10,'green');
    this.getCapacity();
    }

}
</script>

<style>
/* Make sure that padding behaves as expected */
* {box-sizing:border-box}

/* Container for skill bars */
.disk {
  width: 100%; /* Full width */
  background-color: #ddd; /* Grey background */
}

.free {
  text-align: right; /* Right-align text */
  padding-top: 5px; /* Add top padding */
  padding-bottom: 5px; /* Add bottom padding */
  color: white; /* White text color */
}

</style>