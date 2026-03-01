<template>
  <v-container fluid class="pa-0">
    <div class="d-flex justify-space-between align-center mb-6">
      <div>
        <h1 class="text-h4 font-weight-bold">Professional Experience</h1>
        <p class="text-subtitle-1 text-grey">
          Manage your career history and specialized database roles.
        </p>
      </div>
      <v-btn color="primary" prepend-icon="mdi-plus" size="large">
        Add New Experience
      </v-btn>
    </div>

    <v-card v-for="job in experiences" :key="job.id" flat border class="mb-4 pa-2 rounded-lg">
      <div class="d-flex align-center">
        <v-avatar color="grey-lighten-3" rounded="lg" size="64" class="mr-4">
          <v-icon size="32" color="grey-darken-1">{{ job.icon }}</v-icon>
        </v-avatar>
        
        <div class="flex-grow-1">
          <h3 class="text-h6 font-weight-bold">{{ job.role }}</h3>
          <div class="text-primary font-weight-medium">{{ job.company }}</div>
          <div class="text-caption text-grey">
            {{ job.period }} • {{ job.type }}
          </div>
        </div>

        <div class="d-flex gap-2">
          <v-btn variant="tonal" prepend-icon="mdi-pencil" class="mr-2">Edit</v-btn>
          <v-btn variant="tonal" color="red" prepend-icon="mdi-delete">Delete</v-btn>
        </div>
      </div>
    </v-card>

    <div class="d-flex justify-space-between mt-8 text-caption text-grey">
      <span>Showing {{ experiences.length }} professional entries</span>
      <div class="d-flex gap-4">
        <a href="#" class="text-decoration-none text-grey">Export CV</a>
        <a href="#" class="text-decoration-none text-grey">View Public Profile</a>
      </div>
    </div>
  </v-container>
</template>

<script setup>
const experiences = [
  { 
    id: 1, 
    role: 'Senior DBA', 
    company: 'Enterprise Data Solutions', 
    period: 'Jan 2021 - Present', 
    type: 'Full-time', 
    icon: 'mdi-database' 
  },
  { 
    id: 2, 
    role: 'Database Engineer', 
    company: 'Cloud Systems Inc', 
    period: 'Mar 2018 - Dec 2020', 
    type: 'Full-time', 
    icon: 'mdi-cloud' 
  },
  { 
    id: 3, 
    role: 'Junior SQL Developer', 
    company: 'Fintech Analytics Group', 
    period: 'Jun 2016 - Feb 2018', 
    type: 'Internship', 
    icon: 'mdi-code-braces' 
  }
];
</script>

<style scoped>
.gap-2 { gap: 8px; }
.gap-4 { gap: 16px; }
</style>