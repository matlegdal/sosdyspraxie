<template lang="pug">
  v-app
    v-navigation-drawer(
      v-model="sidebarIsOpen"
      fixed
      app
      clipped
      :mobile-break-point="600"
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
      dark
      color="primary"
      clipped-left
      fixed
      app
      )
      v-toolbar-side-icon(@click="sidebarIsOpen = !sidebarIsOpen")
      v-toolbar-items(v-for="(link, index) in toolbarLinks" :key="index")
        nuxt-link.link(:to="link.to")
          .link-content {{ link.text }}
      v-spacer
      v-toolbar-title(v-if="$vuetify.breakpoint.smAndUp")
        v-layout(align-center)
          img(src="~/static/img/logo.png" style="height: 32px;")
          div Sos Dyspraxie
    v-content
      nuxt
    v-footer
      v-toolbar(
        flat
        clipped-left
        color="dark"
        dark
      )
        v-layout
          v-flex(xs12 text-xs-center)
            .caption.secondary--text © Sosdyspraxie.com 2018. Tous droits réservés.
</template>

<script>
import { mapGetters } from 'vuex';

export default {
  data() {
    return {
      sidebarIsOpen: true,
    };
  },
  computed: {
    ...mapGetters([
      'links',
      'toolbarLinks',
    ]),
  },
};
</script>

<style lang="scss" scoped>
.link {
  height: 100%;
  width: 92px;
  padding: 0 4px;
  display: flex;
  align-items: center;
  justify-content: center;
  text-decoration: none;

  .link-content {
    font-size: 14px;
    font-weight: 500;
    border-bottom: solid 2px rgba(255, 255, 255, 0);
    color: #fff;
  }
}

.link:hover > .link-content,
.nuxt-link-exact-active > .link-content {
  font-size: 16px;
  font-weight: 700;
  border-bottom: solid 2px #ffc107;
}
</style>
