import { createRouter, createWebHistory } from 'vue-router'

// Import your Login and Dashboard components
import Login from '../views/Login.vue'
// import Dashboard from '../components/Dashboard.vue'

// Define your routes
const routes = [
  {
    path: '/',
    name: 'Login',
    component: Login
  },
  // {
  //   path: '/dashboard',
  //   name: 'Dashboard',
  //   component: Dashboard,
  //   meta: {
  //     requiresAuth: true
  //   }
  // }
]

// Create the router
const router = createRouter({
  history: createWebHistory(),
  routes
})

// Add a global navigation guard to check for authentication
router.beforeEach((to, from, next) => {
  if (to.matched.some(record => record.meta.requiresAuth)) {
    // Check if user is authenticated
    // If not, redirect to login page
    if (!isAuthenticated()) {
      next({ name: 'Login' })
    } else {
      next()
    }
  } else {
    next()
  }
})

// Export the router
export default router