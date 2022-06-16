<template>
    <div>
        <h2>Not Found Page |Error: 404</h2>
        <button type="button" class="btn btn-warning" @click="$router.back()">Indietro</button>
    </div>
</template>

<script>
    export default{
        name: 'NotFoundPage'
    }
</script>