<template>
    <div class="row justify-content-center">
      <div class="col-lg-4 text-center">
        <form-component @new="addNote"></form-component>
      </div>
      <div class="col-lg-8">
        <transition-group name="rotate">
          <notes-component
            v-for="(note, index) in notes"
            :key="note.id"
            :note="note"
            @update="updateNote(index, ...arguments)"
            @delete="deleteNote(index)"
          >
          </notes-component>
        </transition-group>
      </div>
    </div>
</template>

<script>
export default {
  data() {
    return {
      notes: [],
    };
  },
  mounted() {
    axios.get("/notes").then((response) => {
      this.notes = response.data;
    });
  },
  methods: {
    addNote(note) {
      this.notes.push(note);
    },
    updateNote(index, note) {
      this.notes[index] = note;
    },
    deleteNote(index) {
      this.notes.splice(index, 1);
    },
  },
};
</script>