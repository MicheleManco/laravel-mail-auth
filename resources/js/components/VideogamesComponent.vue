<template>
    <div id="videogames">
        <h1>lista di videogiochi</h1>
        <table>
            <tr>
                <th>titolo</th>
                <th>sottotitolo</th>
                <th>rating</th>
                <th v-if="user">Action</th>
            </tr>
            <tr v-for="videogame in videogames" :key="videogame.id">
                <td>{{videogame.titolo}}</td>
                <td>{{videogame.sottotitolo}}</td>
                <td>{{videogame.rating}}</td>
                <td v-if="user">
                    <a :href="`/api/videogame/delete/${videogame.id}`" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        </table>
    </div>
</template>
<script>
export default {
    data: function(){
        return{
            videogames: []
        };
    },
    props:{
        user: String
    },
    mounted() {
        axios.get('/api/videogames/list')
             .then(r=>this.videogames = r.data)
             .catch(e=> console.error(e));
    },
}
</script>