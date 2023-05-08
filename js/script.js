const { createApp } = Vue

  createApp({
    data() {
      return {
        
       disks: []
      };
    },
    mounted() {
        axios.get("http://localhost/Boolean_Esercizi/php-dischi-json/server.php").then((resp)=>  {
            this.disks = resp.data.results;
            // console.log(resp);
        });

    }
  }).mount("#app");