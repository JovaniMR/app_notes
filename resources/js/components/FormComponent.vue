<template>
<transition-group name="rotate">
<div class="card mb-5">
            <div class="card-header"><h3>NOTAS</h3></div>
            <div class="card-body">
                <form action="" @submit.prevent="addNote()">
                     <h4>Nueva nota</h4>
                     <input class="form-control" type="text" v-model="description">
                     <button class="btn btn-success btn-sm btn-block mt-3" type="submit">Agregar</button>
                </form>                       
            </div>
    </div>
</transition-group>
    
</template>

<script>
export default {
    data() {
        return {
            description: '',
        }
    },
    methods:{
        addNote(){

             const params = {
               description: this.description
             };

             this.description=''

             axios.post('/notes',params).then((response) => {
                const note = response.data;
                this.$emit('new',note);
             }
             );

        
           
        }
    }
}
</script>