<template>
  <v-container fluid class="pa-0">
    <div class="d-flex justify-space-between align-center mb-6">
      <div>
        <h1 class="text-h4 font-weight-bold">Professional Experience</h1>
        <p class="text-subtitle-1 text-grey">
          Manage your career history and specialized database roles.
        </p>
      </div>
      <v-btn color="primary" prepend-icon="mdi-plus" size="large" class="text-none" flat>
        Add New Experience
      </v-btn>
    </div>

    <v-card v-if="loading" flat border class="pa-4 text-center rounded-lg">
      <v-progress-circular indeterminate color="primary"></v-progress-circular>
      <div class="mt-2 text-body-2">Loading experiences...</div>
    </v-card>

    <v-card v-else-if="error" flat border class="pa-4 text-center rounded-lg" color="red-lighten-5">
      <v-icon color="red">mdi-alert-circle</v-icon>
      <div class="text-red text-body-2">{{ error }}</div>
    </v-card>

    <v-card v-else v-for="job in experiences" :key="job.id" flat border class="mb-4 rounded-lg">
      <v-card-text class="d-flex align-center pa-4">
        <v-avatar color="grey-lighten-4" rounded="lg" size="56" class="mr-4">
          <v-icon size="28" color="grey-darken-2">{{ job.icon || 'mdi-briefcase' }}</v-icon>
        </v-avatar>
        
        <div class="flex-grow-1">
          <h3 class="text-h6 font-weight-bold text-black">{{ job.title }}</h3>
          <div class="text-body-1 text-primary font-weight-medium">{{ job.company }}</div>
          <div class="text-body-2 text-grey-darken-1">
            {{ job.start_date }} - {{ job.end_date || 'Present' }} • {{ job.employment_type }}
          </div>
        </div>

        <div class="d-flex align-center gap-2">
          <v-btn variant="text" prepend-icon="mdi-pencil" color="grey-darken-2" class="text-none">Edit</v-btn>
          <v-btn variant="text" color="red" prepend-icon="mdi-delete" class="text-none">Delete</v-btn>
        </div>
      </v-card-text>
    </v-card>

    <div class="d-flex justify-space-between mt-8 text-body-2 text-grey">
      <span>Showing {{ experiences.length }} professional entries</span>
      <div class="d-flex gap-4">
        <a href="#" class="text-decoration-none text-grey">Export CV</a>
        <a href="#" class="text-decoration-none text-grey">View Public Profile</a>
      </div>
    </div>
  </v-container>
</template>

<script setup>
import { ref, onMounted } from 'vue';
// Ensure this path correctly points to your API service file
import { ExperienceService } from '../../api/services'; 

const experiences = ref([]);
const loading = ref(true);
const error = ref(null);

const fetchExperiences = async () => {
  try {
    const response = await ExperienceService.getAll();
    // Assuming backend returns an array of experience objects
    experiences.value = response.data;
  } catch (err) {
    error.value = 'Failed to load experiences. Please try again.';
    console.error(err);
  } finally {
    loading.value = false;
  }
};

onMounted(() => {
  fetchExperiences();
});
</script>

<style scoped>
/* Vuetify has native helpers, but scoped gap classes are fine */
.gap-2 { gap: 4px; }
.gap-4 { gap: 16px; }
</style>