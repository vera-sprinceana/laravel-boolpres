<template>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li v-if="pagination.currentPage >1" @click="$emit('on-page-change', pagination.currentPage -1)" class="page-item">
                <a class="page-link" href="#" >Previous</a>
            </li>

            <li v-for=" page in pagination.lastPage "
             :key="page" 
             class="page-item"
             @click="$emit( 'on-page-change', page )"
            role="button"
             >
                <span class="page-link"> {{ page }} </span>
            </li>

            <li class="page-item"
            v-if="pagination.lastPage > pagination.currentPage"
            @click="$emit( 'on-page-change', pagination.currentPage +1)"
            
            >
                <a class="page-link" href="#"> Next </a>
            </li>
        </ul>
    </nav>
</template>

<script>
    export default {
        name: 'Pagination',
        props: [
            'pagination'
        ]
    }

</script>
