<template>
    <div class=" bg-page p-5 mt-5">
        <Loader v-if="isLoading" />
        <div class="container">
            <!-- passiamo i dati dal padre al figlio -->
            
            <div v-if="posts.length">
               <Pagination :pagination="pagination" @on-page-change="getPosts"/> 
                <div class="card text-center mb-3" v-for="post in posts" :key="post.id">
                    <div class="card-header text-uppercase font-weight-bold bg-title">
                        {{ post.title }} - Category: {{ post.category.label }}
                    </div>
                    <div class="card-body bg-body">
                        <p class="card-title">
                            <span v-for=" tag in post.tags " :key="tag.id" class="badge"
                                :style="`background-color: ${tag.color}`">{{ tag.label }}</span>
                        </p>
                        <p class="card-text">{{ post.content }}</p>
                        <router-link :to="{name: 'post-detail', params: {slug: post.slug } }" class="btn btn-info">View</router-link>
                    </div>
                    <div class="card-footer text-muted bg-footer">
                        <h6>{{post.created_at}}</h6>
                    </div>
                </div>
            </div>
            <p v-else>Non ci sono post</p>
        </div>
    </div>


</template>

<script>
    import axios from 'axios';
    import Loader from '../Loader.vue';
    import Pagination from '../Pagination.vue';
    export default {
        name: "PostsList",
        components: {
            Loader,
            Pagination,
        },
        data() {
            return {
                posts: [],
                pagination: {},
                isLoading: true
            }
        },
        methods: {
            getPosts(page = 1) {
                axios.get("http://127.0.0.1:8000/api/posts?page=" + page)
                    .then((res) => {
                        //console.log( res.data.posts.data );

                        //destrutturiamo i componenti 
                        const {
                            data,
                            current_page,
                            last_page
                        } = res.data.posts;

                        // console.log( data );
                        // console.log( current_page );
                        // console.log( last_page);

                        this.posts = data;

                        //salviamo i dati in una variabile
                        this.pagination = {
                            lastPage: last_page,
                            currentPage: current_page
                        }
                    }).then(() => {
                        console.log('terminato il caricamento dei posts')
                        this.isLoading = false;
                    })
            }
        },
        mounted() {
            this.getPosts();
        }
    }

</script>
<style scoped lang="scss">
.bg-page{
    background-color: rgb(239, 231, 221);
}
.bg-title{
    background-color: #cce7e8;
}
.bg-body{
    background-color: rgb(241, 255, 255);
}
.bg-footer{
    background-color:#95d4e2;
}
</style>