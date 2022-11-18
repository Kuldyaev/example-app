<template>
    <div class="dropdown">
        <div v-on:click="isShow = !isShow">
            <a href="#" class="nav-link " style="text-decoration: none" type="button">
                Скачать информацию
            </a>
        </div>
        <ul  v-if="isShow" style="display:block" class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Действие</a></li>
            <li><a class="dropdown-item" href="#">Другое действие</a></li>
            <li><a class="dropdown-item" href="#">Что-то еще здесь</a></li>
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