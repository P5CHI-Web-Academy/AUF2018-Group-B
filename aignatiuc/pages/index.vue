<template>
<el-container>
<el-header height="210px">
<img src="/pentalog.png" class="pentalog_logo">
</el-header>
<el-container>
<el-aside width="370px">
  <el-menu
      default-active=""
      class="el-menu-vertical-demo"
      @open="handleOpen"
      @close="handleClose"
      background-color="#545c64"
      text-color="#fff"
      active-text-color="#0000cc">

        <el-submenu index="1">
        <template slot="title">
       <i class="el-icon-check"></i>
             <span> Auto </span>
        </template>
          <el-menu-item-group title="">
          <el-menu-item index="1-1">Distance</el-menu-item>
          <el-menu-item index="1-2">Temps</el-menu-item>
          <el-menu-item index="1-3">Prix</el-menu-item>
          <el-menu-item index="1-4">Disponibilite</el-menu-item>
        </el-menu-item-group>
         </el-submenu>
    
      <el-submenu index="2">
        <template slot="title">
       <i class="el-icon-check"></i>
             <span> Train </span>
        </template>
          <el-menu-item-group title="">
          <el-menu-item index="2-1">Distance</el-menu-item>
          <el-menu-item index="2-2">Temps</el-menu-item>
          <el-menu-item index="2-3">Prix</el-menu-item>
          <el-menu-item index="2-4">Disponibilite</el-menu-item>
        </el-menu-item-group>
         </el-submenu>

        <el-submenu index="3">
        <template slot="title">
       <i class="el-icon-check"></i>
             <span> Avion </span>
        </template>
          <el-menu-item-group title="">
          <el-menu-item index="3-1">Distance</el-menu-item>
          <el-menu-item index="3-2">Temps</el-menu-item>
          <el-menu-item index="3-3">Prix</el-menu-item>
          <el-menu-item index="3-4">Disponibilite</el-menu-item>
        </el-menu-item-group>
         </el-submenu>
      </el-menu>
</el-aside>
<el-main>
    <v-stage :config="configKonva">
    <v-layer>
      <div  v-for="config in configCircle" :key="config.name">
        <v-circle :config="config"></v-circle>
      </div>
    </v-layer>
  </v-stage>
</el-main>
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

<script>
export default {
  data() {
    return {
      configKonva: {
        width: 1500,
        height: 1000
      },
      configCircle: [
        {
          name: '#1',
          x: 382,
          y: 243,
          radius: 4,
          fill: "red",
          stroke: "black", 
          strokeWidth: 2
        },
        {
          name: '#2',
          x: 397,
          y: 450,
          radius: 4,
          fill: "red",
          stroke: "black", 
          strokeWidth: 2
        },
        {
          name: '#3',
          x: 797,
          y: 390,
          radius: 4,
          fill: "red",
          stroke: "black", 
          strokeWidth: 2
        },
        {
          name: '#4',
          x: 897,
          y: 290,
          radius: 4,
          fill: "red",
          stroke: "black", 
          strokeWidth: 2
        }
        ,
        {
          name: '#5',
          x: 597,
          y: 290,
          radius: 4,
          fill: "red",
          stroke: "black", 
          strokeWidth: 2
        },
        {
          name: '#6',
          x: 1200,
          y: 290,
          radius: 4,
          fill: "red",
          stroke: "black", 
          strokeWidth: 2
        }

        
      ]
    };
  }
};

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
margin-left: 600px;
}


.title {
font-family: 'Quicksand', 'Source Sans Pro', -apple-system, BlinkMacSystemFont,
'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
display:block;
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
