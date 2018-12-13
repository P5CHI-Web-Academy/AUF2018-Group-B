import Vuex from 'vuex'

const store = () => {
  return new Vuex.Store({
    state: {
      noduri: {},
      padding: 50,
      arcs: [],
      showResult: false,
      gridData: [],
      points: {
        config: [],
        text: []
      },
      lines: {
        config: []
      }
    },
    actions: {
      triggerResult({ commit }, type) {
        commit('SHOW_RESULT', type)
      },
      uploadNodes({ commit }, nodes) {
        commit('SET_NODES', nodes)
        commit('DRAW_POINTS')
      },
      uploadArcs({ commit }, arcs) {
        commit('SET_ARCS', arcs)
        commit('DRAW_ARCS')
      },
      toogleDialog({ commit }, visible) {
        commit()
      },
      parseResult({ commit, state }, type) {
        let parsedData = []
        let final = Object.keys(state.noduri).length
        parsedData = [...state.arcs.filter(x => x[type])].map(t => ({
          from: t.from == final ? 'final' : t.from,
          to: t.to == final ? 'final' : t.to,
          vehicle: t[type]
        }))

        parsedData = [
          ...parsedData,
          {
            from: 'final',
            to: 'new'
          }
        ]

        const ip = this.$axios.$post('http://localhost/AUF2018-Group-B/algorithm/',{
          ...parsedData
        })
        ip.then(function(value) {
          console.log(value)
          commit('SET_GRID_DATA', value, parsedData)
          console.log('Parsed', parsedData)
        })
      }
    },
    mutations: {
      SHOW_RESULT(state, trigger) {
        state.showResult = trigger
      },
      SET_NODES(state, nodes) {
        state.noduri = nodes
      },
      SET_ARCS(state, arcs) {
        state.arcs = arcs
      },
      SET_GRID_DATA(state, data) {
        state.gridData = data
        const keys = Object.keys(state.gridData)
        const path = state.gridData.price.graph

        state.gridData = path.map((x, i) => ({
          id: keys[i].toUpperCase(),
          path: state.gridData[keys[i]].graph.join(' => '),
          value: state.gridData[keys[i]].value
        }))
      },
      DRAW_POINTS(state) {
        for (let key in state.noduri) {
          state.points.config = [
            ...state.points.config,
            {
              x: state.noduri[key][0] * state.padding,
              y: state.noduri[key][1] * state.padding,
              radius: 15,
              stroke: '#5fb0e4',
              strokeWidth: 2,
              fill: '#a80808'
            }
          ]
          state.points.text = [
            ...state.points.text,
            {
              x: state.noduri[key][0] * state.padding - 5,
              y: state.noduri[key][1] * state.padding - 5,
              text: key,
              fontSize: 16,
              fontFamily: 'Calibri',
              fill: 'white'
            }
          ]
        }
      },
      DRAW_ARCS(state) {
        for (let arc in state.arcs) {
          let coords = {
            fromNode: {
              x: state.noduri[state.arcs[arc].from][0] * state.padding,
              y: state.noduri[state.arcs[arc].from][1] * state.padding
            },
            toNode: {
              x: state.noduri[state.arcs[arc].to][0] * state.padding,
              y: state.noduri[state.arcs[arc].to][1] * state.padding
            }
          }
          state.lines.config = [
            ...state.lines.config,
            {
              points: [
                coords.fromNode.x,
                coords.fromNode.y,
                coords.toNode.x,
                coords.toNode.y
              ],
              strokeWidth: 3,
              stroke: 'blue',
              lineCap: 'round',
              opacity: 0.9
            }
          ]
        }
      }
    },
    getters: {
      dataExists: state => (state.gridData[0] ? true : false)
    }
  })
}

export default store
