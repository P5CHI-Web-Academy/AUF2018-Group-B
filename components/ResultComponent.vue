<template>
  <div class="result">
    <el-dialog title="Le plus court chemin" :visible.sync="dialogVisible">
      <h1>{{formatedGrid}}</h1>
      <downloadExcel type="csv" :data="gridData">Ouvrir SVG file</downloadExcel>
      <el-table :data="gridData" border style="width: 100%">
        <el-table-column property="id" label="ID"></el-table-column>
        <el-table-column property="path" label="PATH"></el-table-column>
        <el-table-column property="value" label="TOTAL"></el-table-column>
      </el-table>
    </el-dialog>
  </div>
</template>

<script>
import { mapState, mapGetters, mapActions } from 'vuex'

export default {
  methods: {
    ...mapActions(['triggerResult', 'toogleDialog'])
  },
  computed: {
    ...mapState(['showResult', 'noduri', 'arcs', 'gridData']),

    formatedGrid() {},
    dialogVisible: {
      get() {
        return this.showResult
      },
      set(val) {
        this.triggerResult()
      }
    }
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
