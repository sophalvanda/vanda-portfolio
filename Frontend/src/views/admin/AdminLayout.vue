<template>
  <v-layout>
    <v-navigation-drawer permanent border="r">
      <div class="pa-6 d-flex align-center">
        <v-avatar color="primary" size="32" class="mr-3">
          <v-icon color="white">mdi-database</v-icon>
        </v-avatar>
        <div>
          <div class="text-subtitle-1 font-weight-black">ADMIN CONSOLE</div>
          <div class="text-caption text-grey">DB Administrator</div>
        </div>
      </div>

      <v-list nav density="comfortable">
        <v-list-item prepend-icon="mdi-view-dashboard" title="Dashboard" to="/admin/dashboard" active-color="primary"></v-list-item>
        <v-list-item prepend-icon="mdi-briefcase-variant" title="Experience" to="/admin/experience"></v-list-item>
        <v-list-item prepend-icon="mdi-xml" title="Projects" to="/admin/projects"></v-list-item>
        <v-list-item prepend-icon="mdi-cog" title="Skills" to="/admin/skills"></v-list-item>
        <v-list-item prepend-icon="mdi-certificate" title="Certifications" to="/admin/certs"></v-list-item>
        <v-list-item prepend-icon="mdi-message-text" title="Messages" to="/admin/messages"></v-list-item>
      </v-list>

      <template v-slot:append>
        <v-divider></v-divider>
        <v-list-item prepend-icon="mdi-logout" title="Logout" color="red" @click="logout"></v-list-item>
      </template>
    </v-navigation-drawer>

    <v-main class="bg-grey-lighten-4 min-vh-100">
      <v-app-bar flat border="b">
        <v-text-field
          prepend-inner-icon="mdi-magnify"
          placeholder="Search data, messages, or logs..."
          variant="solo-filled"
          density="compact"
          hide-details
          class="ml-4"
          max-width="400"
        ></v-text-field>
        <v-spacer></v-spacer>
        <v-btn icon class="mr-2"><v-icon>mdi-bell-outline</v-icon></v-btn>
        <div class="d-flex align-center mr-6">
          <div class="text-right mr-3">
            <div class="text-body-2 font-weight-bold">Vanda Sophal</div>
            <div class="text-caption text-grey">DB Administrator</div>
          </div>
          <v-avatar size="36" image="https://i.imgur.com/vanda-profile.jpg"></v-avatar>
        </div>
      </v-app-bar>

      <div class="pa-6">
        <router-view></router-view>
      </div>
    </v-main>
  </v-layout>
</template>