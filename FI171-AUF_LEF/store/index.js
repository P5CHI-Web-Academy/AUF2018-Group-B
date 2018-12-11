import Vuex from 'vuex'

const store = () => {
  return new Vuex.Store({
    state: {
      noduri: {
        '1': [4, 2],
        '2': [3, 9],
        '3': [8, 6],
        '4': [12, 10],
        '5': [14, 4],
        '6': [22, 2]
      },
      padding: 50,
      arcs: [{
          from: '1',
          to: '2',
          vehicle: {
            distance: 2,
            price: 12,
            time: 30
          }
        },
        {
          from: '1',
          to: '3',
          vehicle: {
            distance: 1,
            price: 12,
            time: 30
          }
        },
        {
          from: '1',
          to: '5',
          vehicle: {
            distance: 3,
            price: 12,
            time: 30
          }
        },
        {
          from: '2',
          to: '4',
          vehicle: {
            distance: 2.7,
            price: 12,
            time: 30
          }
        },
        {
          from: '4',
          to: '5',
          vehicle: {
            distance: 1.9,
            price: 12,
            time: 30
          }
        },
        {
          from: '4',
          to: '6',
          vehicle: {
            distance: 4,
            price: 12,
            time: 30
          }
        },
        {
          from: '5',
          to: '6',
          vehicle: {
            distance: 3.5,
            price: 12,
            time: 30
          }
        }
      ],
      showResult: false,
      gridData: [{
          Distance: '2 km',
          Temps: '1 h ',
          Prix: '1518'
        },
        {
          Distance: '4 km',
          Temps: '2 h',
          Prix: '1518'
        },
        {
          Distance: '1 km',
          Temps: '3 h',
          Prix: '1518'
        },
        {
          Distance: '3 km',
          Temps: '4 h',
          Prix: '1518'
        }
      ],
      dialogTable: false
    },
    actions: {
      triggerResult({
        commit
      }, selected) {
        commit('SHOW_RESULT', selected)
      }
    },
    mutations: {
      SHOW_RESULT(state, selected) {
        state.dialogTable = selected
      }
    }

  })
}

export default store
