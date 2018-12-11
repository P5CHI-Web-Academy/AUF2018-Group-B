<template>
  <el-container>
    <el-header height="140px">
      <Logo/>
    </el-header>
    <el-container>
      <el-aside>
        <Aside/>
      </el-aside>
      <el-main>
        <Map/>
        <Result/>
      </el-main>
    </el-container>
  </el-container>
</template>

<script>
import Logo from '~/components/LogoComponent.vue'
import Map from '~/components/MapComponent.vue'
import Aside from '~/components/AsideComponent.vue'
import Result from '~/components/ResultComponent.vue'

export default {
  components: {
    Logo,
    Map,
    Aside,
    Result
  }
}
</script>
