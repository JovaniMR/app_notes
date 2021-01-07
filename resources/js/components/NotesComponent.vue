<template>

<div class="card mt-3">
         <div class="card-header">Publicado en: {{ note.created_at }}</div>
         <div class="card-body">

             <input  v-if="editMode" type="text" class="form-control" v-model=" note.description ">
             <p v-else >{{ note.description }}</p>

         </div>
         <div class="card-footer">
                 <button v-if="editMode" class="btn btn-primary btn-sm" type="submit" @click="updateNote()">Guardar cambios</button>
                 <button v-else class="btn btn-warning btn-sm" type="submit" @click="editNote()">Editar</button>
                 <button class="btn btn-danger btn-sm" type="submit" @click="deleteNote()">Eliminar</button>
         </div>
    </div>

</template>

<script>
    export default {
        data() {
            return {
                editMode: false,
                deleteMode:false
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        props:['note'],
        methods:{
          deleteNote(){
            
            axios.delete(`/notes/${this.note.id}`).then(() =>{
              this.$emit('delete');
              this.deleteMode=true;
            });
            this.deleteMode=false;
          },
          editNote(){
            this.editMode=true
          },
          updateNote(){

            const params = {
                description: this.note.description
            }

            axios.put(`/notes/${this.note.id}`,params).then((response)=>{
              this.editMode=false; 
              const note = response.data;
              this.$emit('update',note);
                   
            }).catch(function(error) {
               console.log(error);            
            });
          }
        }
    }
</script>
