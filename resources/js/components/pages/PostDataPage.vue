<template>
    <main class="bg-page">
        <div class="mt-5 text-center">
            <h1>Singola Pagina del Post: {{post.title}} </h1>

            <!-- alert ANCHOR -->
            <Alert v-if="isError" message="Il post non esiste" type="danger" />
            <p>{{post.content}} </p>

        </div>
    </main>

</template>

<script>
    import axios from 'axios';
    import Alert from '../Alert.vue';
    export default {
        name: "PostDataPage",
        data() {
            return {
                post: [],
                isError: false,
            }
        },
        components: {
            Alert
        },
        methods: {
            getPost() {
                axios.get(`http://127.0.0.1:8000/api/posts/${ this.$route.params.slug }`)
                    .then((res) => {
                        console.log(res.data);
                        this.post = res.data;
                    }).catch((err) => {
                        this.isError = true;
                    })
            }
        },
        mounted() {
            this.getPost();
        }
    }

</script>
<style scoped lang="scss">
    .bg-page {
        width: 100%;
        background-color: rgb(217, 233, 247);
    }

</style>
