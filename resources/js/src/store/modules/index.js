export const index = {
    namespaced: true,
    state: () => ({
        count: 0
    }),
    mutations: {
        increment: (state) => {
            state.count++;
        }
    },
}
