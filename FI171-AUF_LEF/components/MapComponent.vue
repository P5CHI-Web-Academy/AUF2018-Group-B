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
      },
      points: {
        config: [],
        text: []
      },
      lines: {
        config: [],
        text: []
      }
    }
  },
  computed: {
    ...mapState(['noduri', 'padding', 'arcs'])
  },
  created() {
    for (let key in this.noduri) {
      this.points.config = [
        ...this.points.config,
        {
          x: this.noduri[key][0] * this.padding,
          y: this.noduri[key][1] * this.padding,
          radius: 15,
          stroke: '#5fb0e4',
          strokeWidth: 2,
          fill: '#a80808d0'
        }
      ]
      this.points.text = [
        ...this.points.text,
        {
          x: this.noduri[key][0] * this.padding - 8,
          y: this.noduri[key][1] * this.padding - 8,
          text: key,
          fontSize: 16,
          fontFamily: 'Calibri',
          fill: 'white'
        }
      ]
    }

    for (let arc in this.arcs) {
      let coords = {
        fromNode: {
          x: this.noduri[this.arcs[arc].from][0] * this.padding,
          y: this.noduri[this.arcs[arc].from][1] * this.padding
        },
        toNode: {
          x: this.noduri[this.arcs[arc].to][0] * this.padding,
          y: this.noduri[this.arcs[arc].to][1] * this.padding
        }
      }

      // TO DO: Implement the right algorithm for rotation angle of text
      let rotationAngle = Math.abs(
        (Math.atan2(
          coords.toNode.y - coords.fromNode.y,
          coords.toNode.x - coords.fromNode.x
        ) *
          180) /
          Math.PI
      )
      // console.log(rotationAngle)
      this.lines.config = [
        ...this.lines.config,
        {
          points: [
            coords.fromNode.x,
            coords.fromNode.y,
            coords.toNode.x,
            coords.toNode.y
          ],
          strokeWidth: 3,
          stroke: 'blue',
          lineCap: 'round',
          opacity: 0.9
        }
      ]

      this.lines.text = [
        ...this.lines.text,
        {
          x: (coords.fromNode.x + coords.toNode.x) / 2 - 10,
          y: (coords.fromNode.y + coords.toNode.y) / 2 - 20,
          text: this.arcs[arc].vehicle.price,
          fontSize: 16,
          fontFamily: 'Calibri',
          fill: 'black'
          // rotation: rotationAngle
        }
      ]
    }
  }
}
</script>
