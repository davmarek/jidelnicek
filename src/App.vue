<script>
import List from './components/List.vue';

export default {
    data() {
        return {
            menu: null,
        };
    },
    components: {
        List,
    },
    created() {
        fetch('http://davidmarek.8u.cz/jidelnicekAPI/')
            .then((response) => response.json())
            .then((json) => (this.menu = json.groups));
    },
};
</script>

<template>
    <div v-if="this.menu != null">
        <List :list="this.menu[0]"></List>

        <List :list="this.menu[1]"></List>

        <List :list="this.menu[2]"></List>

        <List :list="this.menu[3]"></List>
    </div>
</template>

<style>
@import url('https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap');

body {
    margin: 0;
}

#app {
    font-family: 'Rubik', Avenir, Helvetica, Arial, sans-serif;
    font-size: 14px;
    background-color: #fafafa;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    color: black;
    height: 100vh;
}
</style>
