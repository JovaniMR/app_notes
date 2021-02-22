<template>
  <div class="card mt-2">
    <div class="card-header pt-1 pb-1">
      <div class="row">
        <div class="col-12 col-md-6">
          Publicado el: {{ note.created_at | formatDate }}
        </div>
        <div class="col-12 col-md-5 text-right">
          <button
            v-if="editMode"
            class="btn btn-primary btn-sm mr-3"
            type="submit"
            @click="updateNote()"
          >
            Guardar cambios
          </button>
          <button
            v-else
            class="btn btn-warning btn-sm mr-3"
            type="submit"
            @click="editNote()"
          >
            Editar
          </button>
          <button
            class="btn btn-danger btn-sm"
            type="submit"
            @click="deleteNote()"
          >
            Eliminar
          </button>
        </div>
      </div>
    </div>
    <div class="card-body pt-2 pb-2">
      <input
        v-if="editMode"
        type="text"
        class="form-control"
        v-model="note.description"
      />
      <p v-else>{{ note.description }}</p>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      editMode: false,
      deleteMode: false,
    };
  },
  mounted() {
    console.log("Component mounted.");
  },
  props: ["note"],
  methods: {
    deleteNote() {
      axios.delete(`/notes/${this.note.id}`).then(() => {
        this.$emit("delete");
        this.deleteMode = true;
      });
      this.deleteMode = false;
    },
    editNote() {
      this.editMode = true;
    },
    updateNote() {
      const params = {
        description: this.note.description,
      };

      axios
        .put(`/notes/${this.note.id}`, params)
        .then((response) => {
          this.editMode = false;
          const note = response.data;
          this.$emit("update", note);
        })
        .catch(function (error) {
          console.log(error);
        });
    },
  },
};
</script>
