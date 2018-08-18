<template lang="pug">
  v-jumbotron(color="primary" dark style="height: calc(100vh - 92px);")
    v-container(style="padding-top: 6rem;")
      v-layout(align-center)
        v-flex(text-xs-center)
          h1.display-3 Sos Dyspraxie
          h2.headline.accent--text Pour mieux aider l'enfant dyspraxique
    v-container
      v-carousel(hide-delimiters style="box-shadow: 0px 0px 0px")
        v-carousel-item(
          v-for="(item, index) in items"
          :key="index"
          )
          v-container(fill-height)
            v-layout(align-center justify-center)
              v-flex(xs11 text-xs-center)
                h3.display-1 {{ item.question }}
                nuxt-link(:to="item.to")
                  v-btn.mt-4(color="accent" dark) Lire la réponse
</template>

<script>
export default {
  data() {
    return {
      items: [
        {
          question: 'Mon enfant peut-il bénéficier de réadaptation ?',
          to: '/',
        },
        {
          question: "Qu'est-ce que la dyspraxie ?",
          to: '/',
        },
      ],
    };
  },
};
</script>
