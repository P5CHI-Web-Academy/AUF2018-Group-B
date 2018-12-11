<template>
  <div class="result">
    <el-dialog title="Shortest Path" :visible.sync="dialogVisible">
      <downloadExcel type="csv" :data="gridData">Download Data</downloadExcel>
      <el-table :data="gridData">
        <el-table-column property="date" label="Date" width="150"></el-table-column>
        <el-table-column property="name" label="Name" width="200"></el-table-column>
        <el-table-column property="address" label="Address"></el-table-column>
      </el-table>
    </el-dialog>
    <!-- {{nodesMap}} -->
  </div>
</template>

<script>
import Dijkstra from '~/plugins/Dijkstra'
import { mapState, mapGetters, mapActions } from 'vuex'
var map = {
  svg_1: { svg_2: 3, svg_3: 1 },
  svg_2: { svg_1: 2, svg_3: 1 },
  svg_3: { svg_1: 4, svg_2: 1 }
}
let graph = new Dijkstra(map)
const dijkstra = new Dijkstra()
export default {
  methods: {
    ...mapActions(['triggerResult'])
  },
  computed: {
    ...mapState(['showResult', 'noduri', 'arcs', 'gridData', 'dialogTable']),

    getPath: () => {
      return graph.findShortestPath('svg_1', 'svg_2')
    },
    nodesMap: () => {
      let map = {}
      for (const data in noduri) {
        if (noduri.hasOwnProperty(data)) {
          const element = noduri[data]
          console.log(element)
        }
      }
    },
    dialogVisible: {
      get() {
        return this.dialogTable
      },
      set(val) {
        this.triggerResult(false)
      }
    }
  },
  mounted() {
    //   let map =
  }
}
</script>

<style scoped>
.fade_overlay-enter-active,
.fade_overlay-leave-active {
  transition: opacity 1.5s;
}
.fade_overlay-enter, .fade_overlay-leave-to /* .fade_overlay-leave-active below version 2.1.8 */ {
  opacity: 0;
}

.fade_up_result-enter-active,
.fade_overlay-leave-active,
.fade_overlay-enter,
.fade_overlay-leave-to {
  animation: fadeInUp 1.5s;
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translate3d(0, 100%, 0);
  }

  to {
    opacity: 1;
    transform: translate3d(0, -50%, 0);
  }
}

.fadeInUp {
  animation-name: fadeInUp;
}

@keyframes fadeOutDown {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    transform: translate3d(0, 100%, 0);
  }
}

.fadeOutDown {
  animation-name: fadeOutDown;
}
</style>
