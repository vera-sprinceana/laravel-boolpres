<template>
    <div>
        <PostList/>
    </div>
</template>

<script>
    import PostList from '../posts/PostList.vue';
    export default{
        name: 'HomePage',
        components: {
            PostList
        }
    };

</script>
