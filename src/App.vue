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
    fetch('https://doctus.creativnivyvojari.cz/app/index.php')
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
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  height: 100vh;
}

#app {
  font-family: 'Rubik', Avenir, Helvetica, Arial, sans-serif;
  font-size: 14px;
  background-color: #fafafa;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: black;

  height: 100vh;
  padding: 16px;
}

#app > div {
  margin: 0 auto;
  max-width: 1100px;
}
</style>
