<template lang="pug">
  div
    v-toolbar(color="primary" dark height="72px" style="padding: 12px;")
      v-toolbar-side-icon
      v-toolbar-items(v-for="(item, index) in items" :key="index")
        nuxt-link.link(:to="item.to")
          .link-content {{ item.text }}
      v-spacer
      v-toolbar-title(v-if="$vuetify.breakpoint.smAndUp")
        v-layout(align-center)
          img(src="~/static/img/logo.png" style="height: 32px;")
          div Sos Dyspraxie

    home-jumbotron
    section
      v-container(grid-list-lg)
        v-layout(justify-center)
          h2.display-1 Des réponses à vos questions
        v-container(fluid)
          v-layout
            v-flex
              p Sos Dyspraxie est destiné aux parents et enseignants d'enfants dyspraxiques. Il apporte des réponses simples et professionnelles aux questions les plus courantes.
    section.section-light
      v-container(grid-list-lg)
        v-layout(justify-center)
          h2.display-1 Qu'est-ce que la dyspraxie?
        v-container(fluid)
          v-layout(row wrap align-center)
            v-flex(xs12 sm6)
              p.headline La dyspraxie ou le Trouble de l'Acquisition de la Coordination (TAC) sont des diagnostics médicaux.
            v-flex(xs12 sm6)
              p Ils signifient la présence chez l'enfant d'un trouble neurodéveloppemental qui affecte sa capacité à planifier, organiser et automatiser les gestes moteurs pour réaliser une action ou une activité.
              p On parle alors de dyspraxie motrice, de dyspraxie développementale ou de trouble de l'acquisition de la coordination (traduction du terme anglais Developemental Coordination Disorder ou DCD).
    section
      v-container(grid-list-lg)
        v-layout(justify-center)
          v-flex(xs12)
            h2.display-1 Livre à l'intention des parents
        v-container(fluid)
          v-layout(row wrap align-center)
            v-flex(xs12 sm6)
              p Si vous cherchez des réponses à vos questions sur la dyspraxie de votre enfant.
              p Le livre
                strong  La Dyspraxie de l'enfant: vos Grandes Questions, nos Meilleures Réponses
                span  est une référence parfaite pour vous.
            v-flex(xs12 sm6 text-xs-center)
              img(src="~/static/img/livre.jpg" style="height: 50vh;")
    footer(style="background: #343a40;")
      v-container(grid-list-lg)
        v-layout
          v-flex(xs12 text-xs-center)
            .caption.secondary--text © Sosdyspraxie.com 2018. Tous droits réservés.

 </template>

<script>
import HomeJumbotron from '../components/HomeJumbotron.vue';

export default {
  layout: 'landing',
  components: {
    'home-jumbotron': HomeJumbotron,
  },
  data() {
    return {
      items: [
        {
          text: 'Accueil',
          to: '/',
        },
        {
          text: 'Apprendre',
          to: '/apprendre',
        },
      ],
    };
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
.nuxt-link-active > .link-content {
  font-size: 16px;
  font-weight: 700;
  border-bottom: solid 2px #ffc107;
}

.section-light {
  background: #f0f0f0;
}
</style>
