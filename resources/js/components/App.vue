<template>
    <div>
        <Header/>
        <main>
            <div class="container">
                <!-- <PostList /> -->
                
                <router-view></router-view>
            </div>
        </main>
    </div>

</template>

<script>
    import Header from './Header.vue';
    import PostList from './posts/PostList.vue';
    export default{
        name: 'App',
        components: {
            Header,
            PostList
        },

    }

</script>

<style>
   

</style>
