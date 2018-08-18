import Vue from 'vue';
import {
  Vuetify,
  VApp,
  VAvatar,
  VCard,
  VCarousel,
  VNavigationDrawer,
  VFooter,
  VList,
  VBtn,
  VIcon,
  VJumbotron,
  VGrid,
  VToolbar,
  transitions,
} from 'vuetify';
import directives from 'vuetify/es5/directives';

Vue.use(Vuetify, {
  components: {
    VApp,
    VAvatar,
    VCard,
    VCarousel,
    VNavigationDrawer,
    VFooter,
    VList,
    VBtn,
    VIcon,
    VJumbotron,
    VGrid,
    VToolbar,
    transitions,
  },
  directives,
  theme: {
    primary: '#007bff',
    secondary: '#6c757d',
    accent: '#ffc107',
    light: '#fafafa',
    error: '#FF1744',
    info: '#2193F3',
    success: '#4CAF50',
    warning: '#FF9800',
  },
});
