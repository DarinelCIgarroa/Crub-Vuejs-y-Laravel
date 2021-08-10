<template>
  <div class="card m-5">
    <div class="card-header">Publicado en: {{ pensamiento.created_at }}</div>

    <div class="card-body">
      <div class="panel-body form-group">
        <input
          v-if="showEdit"
          type="text"
          name="description"
          class="form-control"
          v-model="pensamiento.description"
        />
        <p v-else>
          {{ pensamiento.description }}
        </p>
      </div>
      <button
        type="submit"
        class="btn btn-success"
        v-on:click="onCLickUpdate()"
        v-if="showEdit"
      >
        Guardar
      </button>
      <button
        type="submit"
        class="btn btn-warning"
        v-on:click="onCLickEdit()"
        v-else
      >
        Editar
      </button>
      <button type="submit" class="btn btn-danger" v-on:click="onClickDelete()">
        Eliminar
      </button>
    </div>
  </div>
</template>

<script>
export default {
  props: ["pensamiento"],
  data() {
    return {
      showEdit: false,
    };
  },
  mounted() {
    console.log("Component mounted.");
  },
  methods: {
    onClickDelete() {
      axios.delete(`/pensamientos/${this.pensamiento.id}`).then(() => {
        this.$emit("delete");
      });
    },
    onCLickEdit() {
      this.showEdit = true;
    },
    onCLickUpdate() {
      const params = {
        description: this.pensamiento.description,
      };
      axios
        .put(`/pensamientos/${this.pensamiento.id}`, params)
        .then((response) => {
          this.showEdit = false;
          const pensamiento = response.data;
          this.$emit("update", pensamiento);
        });
    },
  },
};
</script>
