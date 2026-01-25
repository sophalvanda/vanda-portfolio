<template>
  <div class="project-card">
    <img :src="image" alt="Project Image" />
    <h3>{{ title }}</h3>
    <p>{{ description }}</p>
  </div>
</template>

<script setup>
      defineProps({
      title: String,
      description: String,
      image: String
      })
</script>

<style scoped>
.project-card {
  border: 1px solid #ddd;
  padding: 15px;
  margin: 10px 0;
}
.project-card img {
  max-width: 100%;
  height: auto;
}
</style>
