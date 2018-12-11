<template>
  <div class="el-aside__body">
    <img src="/logo.png" alt="Logo" class="aside__logo">
    <el-row>
      <el-button type="primary" @click="triggerResult(true)">
        <img src="/svg-car.svg" alt="Car" class="aside__icon">
        Auto
      </el-button>
    </el-row>
    <el-row>
      <el-button type="primary" @click="triggerResult(true)">
        <img src="/svg-train.svg" alt="Train" class="aside__icon">
        Train
      </el-button>
    </el-row>
    <el-row>
      <el-button type="primary" @click="triggerResult(true)">
        <img src="/svg-airplane.svg" alt="Plane" class="aside__icon">
        Plane
      </el-button>
    </el-row>
  </div>
</template>

<script>
import { mapActions } from 'vuex'
export default {
  methods: {
    ...mapActions(['triggerResult'])
  }
}
</script>
