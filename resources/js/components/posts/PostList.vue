<template>
    <div>
        <Loader v-if="isLoading" />
        <div class="container">
            <!-- passiamo i dati dal padre al figlio -->
            <Pagination :pagination="pagination" />
            <div v-if="posts.length">
                <div class="card text-center" v-for="post in posts" :key="post.id">
                    <div class="card-header">
                        {{ post.title }} - Category: {{ post.category.label }}

                    </div>
                    <div class="card-header">
                        {{ post.title }}
                    </div>
                    <div class="card-body">
                        <p class="card-title">
                            <span v-for=" tag in post.tags " :key="tag.id" class="badge"
                                :style="`background-color: ${tag.color}`">{{ tag.label }}</span>
                        </p>
                        <p class="card-text">{{ post.content }}</p>
                        <router-link :to="{name: 'post-detail', params: {id: post.id}}" class="btn btn-primary">View</router-link>
                    </div>
                    <div class="card-footer text-muted">
                        2 days ago
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
            getPosts() {
                axios.get("http://127.0.0.1:8000/api/posts")
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
