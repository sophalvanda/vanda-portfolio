<template>
  <v-app :theme="currentTheme">
    <v-app-bar flat border class="px-md-16 bg-white animate-fade-in" height="75">
      <v-avatar tile class="mr-2">
        <v-icon color="primary" size="32">mdi-database-outline</v-icon>
      </v-avatar>
      <v-app-bar-title class="font-weight-black text-h6">Vanda Sophal</v-app-bar-title>
      
      <v-spacer></v-spacer>

      <div class="d-none d-md-flex align-center">
        <v-btn variant="text" class="nav-link text-none font-weight-bold mx-1">About</v-btn>
        <v-btn variant="text" class="nav-link text-none font-weight-bold mx-1">Skills</v-btn>
        <v-btn variant="text" class="nav-link text-none font-weight-bold mx-1">Experience</v-btn>
        <v-btn variant="text" class="nav-link text-none font-weight-bold mx-1">Projects</v-btn>
        <v-btn variant="text" class="nav-link text-none font-weight-bold mx-1">
          <v-icon start>mdi-file-document-outline</v-icon>Resume
        </v-btn>
        <v-btn color="primary" variant="flat" class="ml-4 px-6 rounded-lg text-none font-weight-bold btn-hover-grow" height="45">
          Contact Me
        </v-btn>
      </div>

      <v-app-bar-nav-icon class="d-md-none" @click="drawer = !drawer"></v-app-bar-nav-icon>
    </v-app-bar>

    <v-navigation-drawer v-model="drawer" temporary location="right">
      <v-list nav>
        <v-list-item title="About"></v-list-item>
        <v-list-item title="Skills"></v-list-item>
        <v-list-item title="Experience"></v-list-item>
        <v-list-item title="Projects"></v-list-item>
        <v-list-item title="Resume" prepend-icon="mdi-file-document-outline"></v-list-item>
      </v-list>
    </v-navigation-drawer>

    <v-main class="bg-white">
      <v-container class="py-16">
        <v-row align="center" class="min-vh-hero">
          <v-col cols="12" md="7" class="order-2 order-md-1 pr-md-10 animate-slide-right">
            <h1 class="text-h2 font-weight-black mb-4 leading-tight">
              Vanda Sophal — <br>
              <span class="text-primary">Database Administrator</span>
            </h1>
            <p class="text-h6 text-grey-darken-1 mb-10 font-weight-regular max-width-550">
              Ensuring data availability, security, and high-performance database systems for enterprise-scale environments.
            </p>
            <div class="d-flex flex-column flex-sm-row ga-4">
              <v-btn color="primary" size="x-large" class="px-10 rounded-lg text-none font-weight-bold btn-hover-grow" flat>
                View Expertise
              </v-btn>
              <v-btn variant="outlined" color="grey-lighten-1" size="x-large" class="px-10 rounded-lg text-none font-weight-bold text-grey-darken-3 bg-white btn-hover-outline">
                <v-icon start>mdi-download</v-icon>Download Resume
              </v-btn>
            </div>
          </v-col>
          <v-col cols="12" md="5" class="order-1 order-md-2 mb-10 mb-md-0 animate-zoom-in">
            <v-img 
              src="https://via.placeholder.com/500x500" 
              class="rounded-xl elevation-2 hero-img-border floating-anim"
              aspect-ratio="1"
            ></v-img>
          </v-col>
        </v-row>
      </v-container>

      <v-container class="py-16">
        <v-row>
          <v-col cols="12" md="8" class="animate-fade-up">
            <div class="d-flex align-center mb-6">
              <div class="section-loader-blue mr-4"></div>
              <h2 class="text-h4 font-weight-bold">About Me</h2>
            </div>
            <p class="text-body-1 text-grey-darken-3 leading-relaxed text-justify">
              Specialized in managing enterprise-level databases with a focus on high availability, security, and performance optimization. Expert in Oracle environments, ensuring robust data infrastructure and 24/7 reliability for mission-critical systems.
            </p>
          </v-col>
        </v-row>
      </v-container>

      <div class="bg-grey-lighten-5 py-16">
        <v-container>
          <div class="text-center mb-12 animate-fade-up">
            <h2 class="text-h4 font-weight-black mb-2">Core Skills</h2>
            <p class="text-subtitle-1 text-grey-darken-1">Technical proficiencies and specialized knowledge areas.</p>
          </div>
          <v-row>
            <v-col v-for="(skill, i) in coreSkills" :key="skill.name" cols="12" sm="6" md="4">
              <v-card flat class="pa-8 rounded-xl h-100 skill-card-animated border-subtle" :style="{ 'transition-delay': i * 100 + 'ms' }">
                <v-avatar color="blue-lighten-5" rounded="lg" size="50" class="mb-6 icon-bounce">
                  <v-icon color="primary">{{ skill.icon || 'mdi-cube-outline' }}</v-icon>
                </v-avatar>
                <h3 class="text-h6 font-weight-bold mb-3">{{ skill.name }}</h3>
                <p class="text-body-2 text-grey-darken-1">{{ skill.description }}</p>
              </v-card>
            </v-col>
          </v-row>
        </v-container>
      </div>

      <v-container class="py-16">
        <h2 class="text-h4 font-weight-black mb-12 animate-fade-up">Professional Experience</h2>
        <div v-for="(exp, i) in experiences" :key="i" class="exp-row mb-12 animate-fade-up">
          <v-row no-gutters>
            <v-col cols="1" sm="auto" class="pr-6 d-flex flex-column align-center">
              <div class="hollow-dot"></div>
              <div v-if="i < experiences.length - 1" class="exp-line"></div>
            </v-col>
            <v-col>
              <v-row class="mb-4">
                <v-col cols="12" sm="8">
                  <h3 class="text-h5 font-weight-bold mb-1">{{ exp.title }}</h3>
                  <p class="text-subtitle-1 text-primary font-weight-bold">{{ exp.company }}</p>
                </v-col>
                <v-col cols="12" sm="4" class="text-sm-right">
                  <v-chip color="blue-lighten-4" text-color="primary" class="font-weight-black px-4">
                    {{ exp.start_date }} - {{ exp.end_date || 'Present' }}
                  </v-chip>
                </v-col>
              </v-row>
              <p class="text-body-2 text-grey-darken-2">{{ exp.description }}</p>
            </v-col>
          </v-row>
        </div>
      </v-container>

      <div class="bg-primary py-16 inner-shadow">
        <v-container>
          <h2 class="text-h4 font-weight-black text-center text-white mb-12">Tools & Technologies</h2>
          <v-row justify="center">
            <v-col v-for="tool in tools" :key="tool.name" cols="4" sm="3" md="2">
              <v-card flat color="rgba(255,255,255,0.15)" class="py-6 rounded-xl text-center tool-card-glow">
                <v-icon color="white" size="32" class="mb-2">{{ tool.icon || 'mdi-wrench' }}</v-icon>
                <div class="text-caption text-white font-weight-bold text-uppercase">{{ tool.name }}</div>
              </v-card>
            </v-col>
          </v-row>
        </v-container>
      </div>

      <v-container class="py-16">
        <v-row class="bg-white rounded-2xl border-subtle pa-6 pa-md-12 align-center animate-fade-up">
          <v-col cols="12" md="5">
            <h2 class="text-h3 font-weight-black mb-6">Get in Touch</h2>
            <p class="text-body-1 text-grey-darken-1 mb-10 max-width-400">Discussing enterprise database solutions or technical challenges.</p>
            
            <div v-for="c in contactLinks" :key="c.label" class="d-flex align-center mb-6">
              <v-avatar color="blue-lighten-5" class="mr-4" size="45">
                <v-icon color="primary" size="20">{{ c.icon }}</v-icon>
              </v-avatar>
              <div>
                <div class="text-overline text-grey-lighten-1 leading-none mb-1 font-weight-bold">{{ c.label }}</div>
                <div class="text-body-1 font-weight-bold">{{ c.value }}</div>
              </div>
            </div>
          </v-col>
          
          <v-col cols="12" md="7">
            <v-card flat class="pa-8 rounded-2xl bg-grey-lighten-4">
              <v-form @submit.prevent="submitContact">
                <v-row dense>
                  <v-col cols="12" class="mb-2">
                    <label class="text-caption font-weight-black ml-1">Full Name</label>
                    <v-text-field v-model="contactForm.full_name" variant="solo" flat rounded="lg" class="mt-1" required></v-text-field>
                  </v-col>
                  <v-col cols="12" class="mb-2">
                    <label class="text-caption font-weight-black ml-1">Email Address</label>
                    <v-text-field v-model="contactForm.email" variant="solo" flat rounded="lg" class="mt-1" type="email" required></v-text-field>
                  </v-col>
                  <v-col cols="12" class="mb-4">
                    <label class="text-caption font-weight-black ml-1">Message</label>
                    <v-textarea v-model="contactForm.message" variant="solo" flat rounded="lg" rows="4" class="mt-1" required></v-textarea>
                  </v-col>
                  <v-col cols="12">
                    <v-btn type="submit" color="primary" block size="x-large" class="rounded-lg font-weight-bold text-none shadow-blue" height="55" :loading="loading">
                      Send Message
                    </v-btn>
                  </v-col>
                </v-row>
              </v-form>
            </v-card>
          </v-col>
        </v-row>
      </v-container>
    </v-main>
  </v-app>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import api from '@/api/api'; // Import your new centralized API instance

// UI State
const drawer = ref(false);
const currentTheme = ref('light');
const loading = ref(false);

// Backend Data Refs
const coreSkills = ref([]);
const experiences = ref([]);
const tools = ref([]);
const certifications = ref([]);

// Contact Form Ref
const contactForm = ref({
  full_name: '',
  email: '',
  message: ''
});

// Fetch all data from backend
const fetchPortfolioData = async () => {
  try {
    const [skillsRes, expRes, toolsRes, certsRes] = await Promise.all([
      api.get('/skills'),
      api.get('/experiences'),
      api.get('/tools'),
      api.get('/certifications')
    ]);

    coreSkills.value = skillsRes.data;
    experiences.value = expRes.data;
    tools.value = toolsRes.data;
    certifications.value = certsRes.data;
  } catch (error) {
    console.error("Error loading portfolio data:", error);
  }
};

// Form Submission
const submitContact = async () => {
  loading.value = true;
  try {
    await api.post('/contact', contactForm.value);
    alert('Message sent successfully!');
    contactForm.value = { full_name: '', email: '', message: '' };
  } catch (error) {
    console.error("Error sending message:", error);
    alert('Failed to send message.');
  } finally {
    loading.value = false;
  }
};

onMounted(() => {
  fetchPortfolioData();
});

const contactLinks = [
  { label: 'EMAIL', value: 'vanda.sophal@example.com', icon: 'mdi-email-outline' },
  { label: 'LINKEDIN', value: 'linkedin.com/in/vandasophal', icon: 'mdi-linkedin' },
  { label: 'GITHUB', value: 'github.com/vsophal-dba', icon: 'mdi-github' }
];
</script>

<style scoped>
/* Keyframes & Animations */
@keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
@keyframes slideRight { from { opacity: 0; transform: translateX(-50px); } to { opacity: 1; transform: translateX(0); } }
@keyframes zoomIn { from { opacity: 0; transform: scale(0.9); } to { opacity: 1; transform: scale(1); } }
@keyframes float { 0% { transform: translateY(0px); } 50% { transform: translateY(-10px); } 100% { transform: translateY(0px); } }

.animate-fade-up { animation: fadeInUp 0.8s ease forwards; }
.animate-slide-right { animation: slideRight 1s ease forwards; }
.animate-zoom-in { animation: zoomIn 0.8s ease forwards; }
.floating-anim { animation: float 5s ease-in-out infinite; }

/* Layout Helpers */
.min-vh-hero { min-height: 70vh; }
.leading-tight { line-height: 1.2; }
.max-width-550 { max-width: 550px; }
.section-loader-blue { width: 50px; height: 4px; background: #1976D2; border-radius: 2px; }
.hero-img-border { border: 12px solid white; box-shadow: 0 15px 45px rgba(0,0,0,0.08); }
.border-subtle { border: 1px solid rgba(0,0,0,0.05) !important; }

/* Timeline UI */
.hollow-dot { width: 14px; height: 14px; border: 2px solid #1976D2; border-radius: 50%; background: white; z-index: 2; margin-top: 8px; }
.exp-line { width: 2px; flex-grow: 1; background-color: #E3F2FD; margin-top: 4px; }

/* Interactive States */
.skill-card-animated { transition: all 0.3s ease; }
.skill-card-animated:hover { transform: translateY(-5px); box-shadow: 0 10px 30px rgba(0,0,0,0.05); border-color: #1976D2 !important; }
.tool-card-glow { transition: all 0.3s ease; }
.tool-card-glow:hover { background: rgba(255,255,255,0.25) !important; transform: scale(1.05); }
.btn-hover-grow:hover { transform: scale(1.02); }

@media (max-width: 600px) {
  .text-h2 { font-size: 2.5rem !important; }
  .py-16 { padding: 40px 0 !important; }
}
</style>