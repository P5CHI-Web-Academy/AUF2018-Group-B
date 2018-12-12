<template>
  <v-stage ref="stage" :config="configKonva">
    <v-layer>
      <v-line v-for="item in lines.config" :key="item.id" :config="item"></v-line>
      <v-circle v-for="item in points.config" :key="item.id" :config="item"></v-circle>
      <!-- <v-text v-for="item in lines.text" :key="item.id" :config="item"></v-text> -->
      <v-text v-for="item in points.text" :key="item.id" :config="item"></v-text>
    </v-layer>
  </v-stage>
</template>
<script>
import { mapState } from 'vuex'

const width = window.innerWidth
const height = window.innerHeight

export default {
  data() {
    return {
      configKonva: {
        width: width,
        height: height
      }
    }
  },
  computed: {
    ...mapState(['noduri', 'padding', 'arcs', 'points', 'lines'])
  }
}
</script>
