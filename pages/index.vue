<template>
  <el-container>
    <el-header height="170px">
      <Logo/>
    </el-header>
    <el-container>
      <el-aside>
        <Aside/>
      </el-aside>
      <el-main>
        <Map/>
      </el-main>
    </el-container>
  </el-container>
</template>

<script>
import Logo from '~/components/LogoComponent.vue'
import Map from '~/components/MapComponent.vue'
import Aside from '~/components/Aside/AsideComponent.vue'

export default {
  components: {
    Logo,
    Map,
    Aside
  }
}
</script>
