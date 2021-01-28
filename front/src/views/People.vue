<template>
  <div class="people">
    <!-- C'est ici qu'on va faire notre v-for -->
    <!--<Personne :v-for="(p, id in peoples)" :key="id"/>-->
    <ul>
        <!-- <li v-for="(item, index) in personnes" :key="index">{{item.name}}</li> -->
        <Personne  v-for="(item, index) in personnes" :name="item.name" :id="item.id" :key="index" />
    </ul>
  </div>
</template>

<script>
// @ is an alias to /src
import Personne from '@/components/Personne.vue'

export default {
  name: 'People',
  components: {
    Personne
  }, 
  data: function(){
      return {personnes : [],}
  }, 
  mounted: function(){
      fetch('http://localhost:8000/backend.php')
        .then(response => response.json())
        .then((data) => {this.personnes = data})


  }  
}
</script>
