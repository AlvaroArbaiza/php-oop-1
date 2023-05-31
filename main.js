const { createApp } = Vue

    createApp({
        data() {
            return {
                pathServer: 'http://localhost:8888/php-oop-1/apis/server.php',
            }        
        },
        methods: {
            // method per la chiamata dell'array nel file php
            call() {
                axios.get(this.pathServer)
                .then( (res) => {

                    this.data = res.data

                })
            },
        }
    }).mount('#app')