new Vue({
    el: '#app',
    data: {
        db: []
    },

    mounted(){
        axios.get("db_api.php")
            .then(resp => {
                this.db = resp.data.data
                console.log(this.db)
            })
    }
})