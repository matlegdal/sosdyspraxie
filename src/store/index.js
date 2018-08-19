import Vuex from 'vuex';

export default () => new Vuex.Store({
  state: {
    links: [
      {
        text: 'Accueil',
        to: '/',
        icon: 'home',
        toolbar: true,
      },
      {
        text: 'Apprendre',
        to: '/apprendre',
        icon: 'school',
        toolbar: true,
        children: [
          {
            text: 'Diagnostic',
            to: '/diagnostic',
          },
          {
            text: 'Parents',
            to: '/parents',
          },
        ],
      },
      {
        text: 'Livre',
        to: '/livre',
        icon: 'shopping_cart',
        toolbar: true,
      },
      {
        text: 'Contact',
        to: '/contact',
        icon: 'mail',
        toolbar: false,
      },
    ],
  },
  getters: {
    links: state => state.links,
    toolbarLinks: state => state.links.filter(link => link.toolbar),
  },
  mutations: {
  },
});
