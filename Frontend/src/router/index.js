import { createRouter, createWebHistory } from 'vue-router';
import AdminLayout from '../views/admin/AdminLayout.vue';
import Dashboard from '../views/admin/dashboard.vue';
import Experience from '../views/admin/experience.vue';
// 1. Import your webpage component
import Webpage from '../views/webpage/webpage.vue'; 

const routes = [
  // 2. Add the route for the main portfolio page
  {
    path: '/',
    name: 'Portfolio',
    component: Webpage,
  },
  {
    path: '/admin',
    component: AdminLayout,
    redirect: '/admin/dashboard',
    children: [
      {
        path: 'dashboard',
        component: Dashboard,
      },
      {
        path: 'experience',
        component: Experience,
      },
    ],
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;