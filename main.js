const { createApp } = Vue

createApp({
    data() {
        return {
            message: 'Hello Vue!',
        }
    },
    mounted() {
        axios
            .get('server.php')
            .then(response => {
                console.log("response", response);
            })
    }

}).mount('#app')