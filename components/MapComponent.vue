<template>
  <v-stage ref="stage" :config="configKonva">
    <v-layer>
      <v-circle v-for="item in points" :key="item.id" :config="item"></v-circle>
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
      points: [],
      configKonva: {
        width: width,
        height: height
      }
    }
  },
  computed: {
    ...mapState(['noduri', 'padding'])
  },
  created() {
    console.log(height)
    // const stage = this.$refs.stage.getStage()
    for (let key in this.noduri) {
      this.points.push({
        x: this.noduri[key][0] * 60,
        y: this.noduri[key][1] * 43,
        scaleX: 1,
        scaleY: 1,
        radius: 10,
        stroke: '#5fb0e4',
        strokeWidth: 3,
        fill: '#a80808d0'
      })
    }
    // console.log(stage)
    
    const drawLines = () => ({})
  }
}
</script>
