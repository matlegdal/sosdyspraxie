<template lang="pug">
  v-app
    v-navigation-drawer(
      v-model="sidebarIsOpen"
      fixed
      app
      )
      v-list
        v-list-tile(
          v-for="(item, i) in items"
          :to="item.to"
          :key="i"
          router
          exact
        )
          v-list-tile-action
            v-icon {{ item.icon }}
          v-list-tile-content
            v-list-tile-title {{ item.title }}
    v-toolbar(
      fixed
      app)
      v-toolbar-side-icon(@click="sidebarIsOpen = !sidebarIsOpen")
      v-toolbar-title Sos dyspraxie
    v-content
      v-container
        nuxt
</template>

<script>

export default {
  data() {
    return {
      sidebarIsOpen: false,
      items: [
        { icon: 'apps', title: 'Welcome', to: '/' },
        { icon: 'bubble_chart', title: 'Inspire', to: '/inspire' },
      ],
    };
  },
};
</script>
