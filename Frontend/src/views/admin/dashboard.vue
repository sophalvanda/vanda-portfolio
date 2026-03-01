<template>
  <v-container fluid class="pa-0">
    <div class="d-flex justify-space-between align-center mb-6">
      <div>
        <h1 class="text-h4 font-weight-bold">Portfolio Dashboard</h1>
        <p class="text-subtitle-1 text-grey">
          Status: <span class="text-green font-weight-bold">Systems Operational</span> • Database healthy at 99.9% uptime.
        </p>
      </div>
      <div class="d-flex gap-2">
        <v-btn variant="outlined" prepend-icon="mdi-file-document-edit-outline">Update Resume</v-btn>
        <v-btn color="primary" prepend-icon="mdi-plus">Add New Project</v-btn>
      </div>
    </div>

    <v-row>
      <v-col cols="12" sm="6" md="3" v-for="stat in stats" :key="stat.title">
        <v-card flat border class="pa-4 rounded-lg">
          <div class="d-flex justify-space-between mb-2">
            <v-avatar :color="stat.color + '-lighten-4'" rounded size="40">
              <v-icon :color="stat.color">{{ stat.icon }}</v-icon>
            </v-avatar>
            <span :class="'text-' + stat.trendColor + ' font-weight-bold text-caption'">{{ stat.trend }}</span>
          </div>
          <div class="text-grey text-caption font-weight-medium">{{ stat.title }}</div>
          <div class="text-h4 font-weight-black">{{ stat.value }}</div>
          <v-progress-linear :model-value="stat.progress" :color="stat.color" class="mt-4" rounded></v-progress-linear>
        </v-card>
      </v-col>
    </v-row>

    <v-row class="mt-6">
      <v-col cols="12" md="8">
        <v-card flat border rounded="lg">
          <v-card-title class="d-flex justify-space-between pa-4">
            <span class="font-weight-bold">Recent Messages</span>
            <v-btn variant="text" color="primary" size="small">View All</v-btn>
          </v-card-title>
          <v-divider></v-divider>
          <v-list lines="two">
            <v-list-item v-for="msg in messages" :key="msg.id" :prepend-avatar="msg.avatar" class="py-3">
              <template v-slot:title>
                <div class="d-flex justify-space-between">
                  <span class="font-weight-bold">{{ msg.sender }} <span class="text-grey font-weight-regular text-caption">via {{ msg.source }}</span></span>
                  <span class="text-caption text-grey">{{ msg.time }}</span>
                </div>
              </template>
              <template v-slot:subtitle>
                <div class="font-weight-bold text-black">{{ msg.subject }}</div>
                <div class="text-truncate">{{ msg.preview }}</div>
              </template>
            </v-list-item>
          </v-list>
        </v-card>
      </v-col>

      <v-col cols="12" md="4">
        <v-card flat border color="#fafafa" rounded="lg">
          <v-card-title class="pa-4 font-weight-bold">Recent System Logs</v-card-title>
          <v-divider></v-divider>
          <div class="pa-4 font-mono text-caption" style="height: 350px; overflow-y: auto;">
            <div v-for="log in logs" :key="log.id" class="mb-3 d-flex gap-2">
              <span :class="log.typeColor">[{{ log.type }}]</span>
              <span class="text-grey">{{ log.time }}</span>
              <span>{{ log.message }}</span>
            </div>
          </div>
          <v-divider></v-divider>
          <v-btn block variant="text" class="text-caption py-4">DOWNLOAD AUDIT LOGS</v-btn>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<script setup>
const stats = [
  { title: 'Total Page Views', value: '12,840', icon: 'mdi-eye-outline', color: 'blue', trend: '+12.4%', trendColor: 'green', progress: 60 },
  { title: 'New Messages', value: '5', icon: 'mdi-comment-text-outline', color: 'orange', trend: '+2', trendColor: 'green', progress: 40 },
  { title: 'Project Count', value: '24', icon: 'mdi-chart-bubble', color: 'green', trend: 'Stable', trendColor: 'grey', progress: 80 },
  { title: 'Active Status', value: 'Online', icon: 'mdi-lightning-bolt', color: 'blue', trend: '', trendColor: 'green', progress: 100 },
];

const messages = [
  { id: 1, sender: 'John Doe', source: 'Contact Form', time: '10:45 AM', subject: 'Database Migration project', preview: 'Hi Vanda, I saw your portfolio...', avatar: 'https://i.pravatar.cc/40?u=john' },
  { id: 2, sender: 'Alice Smith', source: 'LinkedIn', time: 'Yesterday', subject: 'Networking Opportunity', preview: 'Great presentation at the DB Summit...', avatar: 'https://i.pravatar.cc/40?u=alice' },
];

const logs = [
  { id: 1, type: 'INFO', typeColor: 'text-green', time: '12:05:32', message: 'Project "Distributed SQL" updated successfully.' },
  { id: 2, type: 'LOG', typeColor: 'text-blue', time: '11:58:10', message: 'Admin login detected from 192.168.1.1.' },
  { id: 3, type: 'WARN', typeColor: 'text-orange', time: '08:45:30', message: 'Image size optimization recommended.' },
];
</script>

<style scoped>
.font-mono {
  font-family: 'Courier New', Courier, monospace;
}
.gap-2 { gap: 8px; }
.gap-4 { gap: 16px; }
</style>