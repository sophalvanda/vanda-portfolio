import { createRouter, createWebHistory } from 'vue-router';
import AdminLayout from '../views/admin/AdminLayout.vue';
import Dashboard from '../views/admin/dashboard.vue';
import Experience from '../views/admin/experience.vue';

const routes = [
  {
    path: '/admin',
    component: AdminLayout, // The layout component is defined here
    redirect: '/admin/dashboard',
    children: [
      {
        path: 'dashboard',
        component: Dashboard, // Renders inside <router-view> within AdminLayout
      },
      {
        path: 'experience',
        component: Experience, // Renders inside <router-view> within AdminLayout
      },
    ],
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;