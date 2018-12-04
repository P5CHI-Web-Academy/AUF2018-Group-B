<template>
<el-container>
<el-header height="200px">
<img src="/pentalog.png" class="pentalog_logo">
</el-header>
<el-container>
<el-aside>
      <el-menu 
      default-active=""
      class="el-menu-vertical-demo"
      @open="handleOpen"
      @close="handleClose"
      background-color="#545c64"
      text-color="#fff"
      active-text-color="#0000cc">

        <el-menu-item index="1" >
        <template slot="title" >
       <i class="el-icon-location"></i>
             <span > Auto </span>
        </template>
         </el-menu-item>
      
      <el-menu-item index="2">
        <i class="el-icon-location-outline"></i>
        <span >Train</span>
      </el-menu-item>

      <el-menu-item index="3" >
        <i class="el-icon-check"></i>
        <span>L'avion</span>
      </el-menu-item>
      </el-menu>
</el-aside>
<el-main></el-main>
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
background-color: #0a2d36;
height: 100vh;
}
.el-header {
background-color: #ffffff;
border-bottom: 7px #0a2d36 solid;
}
.el-main {
background-image: url('/map.svg');
background-repeat: no-repeat;
background-size: contain;
height: 100vh;
}
.pentalog_logo {
width: 1000px;
margin-left: 700px;
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