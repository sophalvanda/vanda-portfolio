import { fileURLToPath, URL } from 'node:url'
import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

export default defineConfig({
  plugins: [vue()],
  resolve: {
    alias: {
      // This line tells Vite that @ means the /src directory
      '@': fileURLToPath(new URL('./src', import.meta.url))
    }
  }
})