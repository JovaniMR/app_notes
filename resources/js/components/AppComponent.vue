<template>
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <router-link to="/home">Notas</router-link>
          <router-link to="/otro">Otro componente</router-link>
         <router-view></router-view>
        </div>
    </div>
   </div>
</template>

<script>
export default {
    name: 'AppComponent'
}
</script>