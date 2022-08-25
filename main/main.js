const app = new Vue({
    el: '#root',
    data: {
        albums: [],
    },
    created() {
        axios.get('https://flynn.boolean.careers/exercises/api/array/music')
            .then((response) => {
                this.albums.push(response.data.response);
            });
        console.log(this.albums);
    }
});