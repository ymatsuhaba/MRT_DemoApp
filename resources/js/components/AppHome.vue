<template>
    <div>
        <toolbar></toolbar>
        <login></login>
        <app-footer></app-footer>
    </div>
    <h1>Home</h1>
</template>



<script>
    import toolbar from './Toolbar'
    import AppFooter from './AppFooter'
    import Login from './login/login'

    export default {
        components:(toolbar,AppFooter,Login)
    }
</script>