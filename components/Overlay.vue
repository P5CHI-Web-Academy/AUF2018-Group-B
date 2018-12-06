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
<style>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 1.5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}
</style>

