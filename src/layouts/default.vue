<template lang="pug">
  v-app
    v-navigation-drawer(
      v-model="sidebarIsOpen"
      fixed
      app
      )
      v-list
        v-list-tile(
          v-for="(link, i) in links"
          :to="link.to"
          :key="i"
          router
          exact
        )
          v-list-tile-action
            v-icon {{ link.icon }}
          v-list-tile-content
            v-list-tile-title {{ link.text }}
    v-toolbar(
      fixed
      app)
      v-toolbar-side-icon(@click="sidebarIsOpen = !sidebarIsOpen")
      v-toolbar-title Sos dyspraxie
    nuxt
</template>

<script>
import { mapGetters } from 'vuex';

export default {
  data() {
    return {
      sidebarIsOpen: false,
    };
  },
  computed: {
    ...mapGetters([
      'links',
    ]),
  },
};
</script>
