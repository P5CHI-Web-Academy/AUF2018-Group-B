<template>
  <div class="el-aside__body">
    <img src="/logo.png" alt="Logo" class="aside__logo">
    <el-row>
      <el-button type="primary" @click="alertType('Car')" >
        <img src="/svg-car.svg" alt="Car" class="aside__icon">
        Auto
      </el-button>
    </el-row>
    <el-row>
      <el-button type="primary"  @click="alertType('Train')" >
                <img src="/svg-train.svg" alt="Train" class="aside__icon">
        Train
      </el-button>
    </el-row>
    <el-row>
      <el-button type="primary" @click="alertType('Plane')" >
                <img src="/svg-airplane.svg" alt="Plane" class="aside__icon">
        Plane
      </el-button>
    </el-row>
  </div>
</template>

<script>
export default {
methods: {
  alertType(selected){
    // alert(`You selected ${selected}`);
    alert(`Distance\nTemps\nPrix\nDisponibilite`);
  }
}
}
</script>
