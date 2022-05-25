<template>
    <div>
        <h1 style="text-align:center"> Users Modules Vue, Laravel</h1>
        <p  style="text-align:center; margin:0px auto;">
            <router-link :to="{ name: 'userlist' }" class="btn btn-primary"> Show Users List</router-link> |
            <router-link :to="{ name: 'adduser' }" class="btn btn-primary"> Add New User </router-link>
        </p>
        <div class="container">
            <router-view></router-view>
        </div>
    </div>
</template>
<script>
    export default {}
</script>