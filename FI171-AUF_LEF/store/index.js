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
      padding: 40,
      arcs: [{
          from: '#1',
          to: '#2',
          vehicle: {
            price: 12,
            time: 5,
            distance: 24
          }
        },
        {
          from: '#2',
          to: '#5',
          vehicle: {
            price: 12,
            time: 5,
            distance: 24
          }
        },
        {
          from: '#5',
          to: '#3',
          vehicle: {
            price: 12,
            time: 5,
            distance: 24
          }
        },
        {
          from: '#3',
          to: '#4',
          vehicle: {
            price: 12,
            time: 5,
            distance: 24
          }
        },
        {
          from: '#4',
          to: '#6',
          vehicle: {
            price: 12,
            time: 5,
            distance: 24
          }
        },
        {
          from: '#5',
          to: '#6',
          vehicle: {
            price: 12,
            time: 5,
            distance: 24
          }
        },
        {
          from: '#1',
          to: '#3',
          vehicle: {
            price: 12,
            time: 5,
            distance: 24
          }
        },
        {
          from: '#3',
          to: '#4',
          vehicle: {
            price: 12,
            time: 5,
            distance: 24
          }
        },
        {
          from: '#4',
          to: '#6',
          vehicle: {
            price: 12,
            time: 5,
            distance: 24
          }
        },
        {
          from: '#2',
          to: '#5',
          vehicle: {
            price: 12,
            time: 5,
            distance: 24
          }
        },
        {
          from: '#5',
          to: '#3',
          vehicle: {
            price: 12,
            time: 5,
            distance: 24
          }
        },
        {
          from: '#5',
          to: '#6',
          vehicle: {
            price: 12,
            time: 5,
            distance: 24
          }
        },
        {
          from: '#4',
          to: '#6',
          vehicle: {
            price: 12,
            time: 5,
            distance: 18
          }
        }
      ],
      showResult: false,
      gridData: [{
          date: '2016-05-02',
          name: 'John Smith',
          address: 'No.1518,  Jinshajiang Road, Putuo District'
        },
        {
          date: '2016-05-04',
          name: 'John Smith',
          address: 'No.1518,  Jinshajiang Road, Putuo District'
        },
        {
          date: '2016-05-01',
          name: 'John Smith',
          address: 'No.1518,  Jinshajiang Road, Putuo District'
        },
        {
          date: '2016-05-03',
          name: 'John Smith',
          address: 'No.1518,  Jinshajiang Road, Putuo District'
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
