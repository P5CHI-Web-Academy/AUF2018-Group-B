<template>
  <el-container>
    <el-header height="70px">
      <img src="/pentalog.png" class="pentalog_logo">
    </el-header>
    <el-container>
      <el-aside width="300px">Aside</el-aside>
      <el-main>Main</el-main>
    </el-container>
  </el-container>
</template>

<script>
import Logo from '~/components/Logo.vue'

export default {
  components: {
    Logo
  }
}
</script>

<style>
.el-aside {
  background-color: #2b3843;
  height: 100vh;
}
.el-header {
  background-color: #f2f2f2;
}
.el-main {
  background-image: url('/map.svg');
  background-repeat: no-repeat;
  background-size: contain;
  height: 100vh;
}
.pentalog_logo {
  width: 200px;
  margin-top: 10px;
}

.title {
  font-family: 'Quicksand', 'Source Sans Pro', -apple-system, BlinkMacSystemFont,
    'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
  display: block;
  font-weight: 300;
  font-size: 100px;
  color: #35495e;
  letter-spacing: 1px;
}

.subtitle {
  font-weight: 300;
  font-size: 42px;
  color: #526488;
  word-spacing: 5px;
  padding-bottom: 15px;
}

.links {
  padding-top: 15px;
}
</style>
