<template lang="pug">
  div
    v-toolbar(color="primary" dark height="72px")
      v-toolbar-side-icon
      v-toolbar-title
        img(src="~/static/img/logo.png")
        span Sos Dyspraxie

    home-jumbotron
</template>

<script>
import HomeJumbotron from '../components/HomeJumbotron.vue';

export default {
  layout: 'landing',
  components: {
    'home-jumbotron': HomeJumbotron,
  },
};
</script>
