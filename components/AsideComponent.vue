<template>
  <div class="el-aside__body">
    <img src="/logo.png" alt="Logo" class="aside__logo">
    <el-row>
      <el-button type="primary" @click="parseResults('auto')">
        <img src="/svg-car.svg" alt="Car" class="aside__icon">
        Auto
      </el-button>
    </el-row>
    <el-row>
      <el-button type="primary" @click="parseResults('train')">
        <img src="/svg-train.svg" alt="Train" class="aside__icon">
        Train
      </el-button>
    </el-row>
    <el-row>
      <el-button type="primary" @click="parseResults('plane')">
        <img src="/svg-airplane.svg" alt="Plane" class="aside__icon">
        Avion
      </el-button>
    </el-row>
    <el-row>
      <input type="file" accept="application/json" @change="addFiles" ref="files" v-show="false">
      <el-button size="small" type="success" @click.prevent="$refs.files.click()">Télécharger le fichier</el-button>
    </el-row>
  </div>
</template>

<script>
import { mapActions, mapState } from 'vuex'
export default {
  data() {
    return {
      parsedObject: {}
    }
  },
  methods: {
    ...mapActions([
      'triggerResult',
      'uploadNodes',
      'uploadArcs',
      'parseResult'
    ]),
    parseResults(payload) {
      this.parseResult(payload), this.triggerResult(true)
    },
    
    addFiles(e) {
      const input = e.target
      const reader = new FileReader()
      reader.onload = f => {
        try {
          const json = JSON.parse(reader.result)
          this.uploadNodes(json[0])
          this.uploadArcs(json.slice(1))
        } catch (e) {
          console.log(e)
        }
      }
      reader.readAsText(input.files[0])
    }
  },
  computed: {
    ...mapState('noduri', 'arcs')
  }
}
</script>
