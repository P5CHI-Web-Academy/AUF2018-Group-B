<template>
  <transition name="fade">
    <div class="overlay" v-if="visible">
      <div class="overlay_body"></div>
      <img class="overlay_img" src="/logo.png">
    </div>
  </transition>
</template>

<script>
export default {
  data() {
    return {
      visible: true
    }
  },
  mounted() {
    this.visible = false
  }
}
</script>
<style scoped>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 1.9s;
}
.fade-enter,
.fade-leave-to {
  opacity: 0;
}
</style>

