import Vuex from 'vuex';

export default () => new Vuex.Store({
  state: {
    sidebarIsOpen: false,
  },
  getters: {
    sidebarIsOpen: state => state.sidebarIsOpen,
  },
  mutations: {
    toggleSidebar(state) {
      state.sidebarIsOpen = !state.sidebarIsOpen;
    },
  },
});
