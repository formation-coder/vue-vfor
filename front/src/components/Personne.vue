<template>
    <p>My name is {{this.name}}</p>
</template>

<script>
export default {
  name: 'Personne',
  props: {
    id: Number, 
    name: String
  }
}
</script>