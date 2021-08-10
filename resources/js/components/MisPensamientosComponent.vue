<template>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <formulario-component @new="addPensamiento"></formulario-component>

      <pensamiento-component
        v-for="(pensamiento, index) in pensamientos"
        :key="pensamiento.id"
        :pensamiento="pensamiento"
        @update='updatePensamiento(index, ...arguments)'
        @delete='deletePensamiento(index)'
      ></pensamiento-component>

    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      pensamientos: [],
    };
  },

  mounted() {
    axios.get('/pensamientos').then((response) =>{
      this.pensamientos = response.data;
    });
  },

  methods:{
      addPensamiento(pensamiento){
          this.pensamientos.push(pensamiento);
      },
      deletePensamiento(index){
          this.pensamientos.splice(index,1);
      },
      updatePensamiento(index, pensamiento){
        this.pensamientos[index] = pensamiento;
      }
  }

};
</script>
