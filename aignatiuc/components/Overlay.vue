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
.overlay {
  position: absolute;
  width: 100%;
  height: 100vh;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}
.overlay_body {
  position: absolute;
  width: 100%;
  height: 100vh;
  background-color: white;
  opacity: 1;
  -webkit-filter: blur(5px);
  z-index: 0;
  filter: blur(1rem);
}

.overlay_img {
  z-index: 100;
  position: relative;
}
.fade-enter-active,
.fade-leave-active {
  transition: opacity 5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}
</style>

