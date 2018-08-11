export default {
  state: () => ({
    sidebar: false,
  }),
  mutations: {
    toggleSidebar(state) {
      state.sidebar = !state.sidebar;
    },
  },
};
