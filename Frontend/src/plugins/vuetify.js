import 'vuetify/styles' // Remove or comment this out
import '../assets/variables.scss' // 1. IMPORT YOUR CUSTOM SCSS HERE
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'

export default createVuetify({
  components,
  directives,
})