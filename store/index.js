import Vuex from 'vuex'

const store = () => {
  return new Vuex.Store({
    state: {
      noduri: {
        '#1': [6, 8],
        '#2': [4, 9],
        '#3': [8, 6],
        '#4': [12, 7],
        '#5': [14, 4],
        '#6': [22, 8]
      },
      padding: 10,
      arcs: [
        {
          from: '#1',
          to: '#2',
          auto: {
            distance: 2,
            price: 12,
            time: 30
          },
          train: {
            distance: 1,
            price: 8,
            time: 25
          },
          plane: {
            distance: 0.8,
            price: 50,
            time: 10
          }
        },
        {
          from: '#1',
          to: '#3',
          auto: {
            distance: 1,
            price: 12,
            time: 30
          },
          train: null,
          plane: null
        }
      ]
    }
  })
}

export default store
