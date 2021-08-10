<template>
  <div class="card">
    <div class="card-header">¿En que estas pensando?</div>

    <div class="card-body">
      <form action="#" v-on:submit.prevent="newPensamiento()">
        <div class="form-group">
          <label for="pensamiento">Ahora estoy pensando en:</label>
          <input
            type="text"
            class="form-control"
            name="pensamiento"
            v-model="description"
          />
        </div>
        <button type="submit" class="btn btn-success">publicar</button>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  data(){
    return{
      description: ''
    }
  }, 
  mounted() {
    console.log("Component mounted.");
  },
  methods:{
    newPensamiento(){
      
      const params = {
        description: this.description
      };

      // axios.post('/pensamientos', params).then((response) => console.log(response));
      axios.post('/pensamientos', params).then((response) =>{
        const pensamiento = response.data;
        
        this.$emit('new', pensamiento);
        this.description = ""; // Resetear el input ponerlo en blanco
      });

      // let pensamiento = {
      //   id: 1,
      //   description: this.description,
      //   created_at: '21/07/2055',
      // };

    }
  }
};
</script>
