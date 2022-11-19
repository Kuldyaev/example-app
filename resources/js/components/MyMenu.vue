<template>
    <div class="dropdown">
        <div v-on:click="isShow = !isShow">
            <a href="#" class="nav-link " style="text-decoration: none" type="button">
                Скачать информацию
            </a>
        </div>
        <ul  v-if="isShow" style="display:block" class="dropdown-menu">
            <li><a href="./download/news" class="dropdown-item">Скачать новости</a></li>
            <li><a href="./download/categories" class="dropdown-item">Скачать категории</a></li>
            <li><a href="./download" class="dropdown-item">Больше вариантов...</a></li>
        </ul>
    </div>    
</template>

<script>
    export default {
        data() {
            return {
                isShow: false
            }
        },
        mounted() {
            console.log( this.isShow)
        }
    }
</script>