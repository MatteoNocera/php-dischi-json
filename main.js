const { createApp } = Vue

createApp({
    data() {
        return {
            albums: [],
        }
    },
    mounted() {
        axios
            .get('server.php')
            .then(response => {
                console.log(response);
                this.albums = response.data
            })
    },
    /* methods: {
        getInfo() {
            console.log('ciao');
        }
    } */

}).mount('#app')