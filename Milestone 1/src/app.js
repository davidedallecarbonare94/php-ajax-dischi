var app = new Vue({
    el: "#root",
    data: {
        discs: [],
        link: "./api/dischi.php"
    },
    mounted() {
        axios.get(this.link)
            .then((response) => {
                this.discs = response.data;
        })
    }
})