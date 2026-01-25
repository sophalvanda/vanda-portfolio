<template>
  <section>
    <h2>DBA Projects</h2>
    <ProjectCard 
      v-for="(project, index) in projects" 
      :key="index"
      :title="project.title" 
      :description="project.description"
      :image="project.image"
    />
  </section>
</template>

<script setup>
import ProjectCard from '../components/ProjectCard.vue'

const projects = [
  {
    title: "Oracle PDB Recovery System",
    description: "Automated recovery of Oracle PDBs with RMAN scripts.",
    image: "/images/project1.jpg"
  },
  {
    title: "Backup Monitoring Automation",
    description: "Daily backup status monitoring with email alerts.",
    image: "/images/project1.jpg"
  }
]
</script>

<style scoped>
h2 {
  text-align: center;
  margin-top: 20px;
}
</style>
