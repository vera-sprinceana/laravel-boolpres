<template>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <router-link class="navbar-brand" :to="{name: 'Home'} ">Boolpres</router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <router-link class="nav-link" :to="{name: 'Home'} ">Home </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" :to="{name: 'Contact'}">Contacts</router-link>
                    </li> 
                     <li class="nav-item">
                        <a class="nav-link" href="/admin">Admin</a>
                    </li> 
                </ul>
            </div>
        </nav>
    </header>
</template>

<script>
    export default{
        name: 'Header'
    }

</script>
<style  lang="scss">
header{
    background-color: #cce7e8;
}
</style>