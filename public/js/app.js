var app = new Vue({
    el: '#app',
    delimiters: ['${', '}'],
    data: {
        items: [],
        loading: false
    },
    methods: {
        load (service) {
            this.loading = true

            axios.get('/distract/public/api/news/' + service).then((response) => {
                this.items = response.data
                this.loading = false
            })
        }
    },
    mounted () {
        this.load('hackernews')
    }
})