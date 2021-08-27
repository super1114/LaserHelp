import axios from 'axios'
import Cookies from 'js-cookie'
import * as types from '../mutation-types'

// state
export const state = {
  user: null,
  token: Cookies.get('token')
}

// getters
export const getters = {
  user: state => state.user,
  token: state => state.token,
  check: state => state.user !== null
}

// mutations
export const mutations = {
  [types.SAVE_TOKEN] (state, { token, remember }) {
    state.token = token
    Cookies.set('token', token, { expires: remember ? 365 : null })
  },

  [types.FETCH_USER_SUCCESS] (state, { user }) {
    state.user = user
  },

  [types.FETCH_USER_FAILURE] (state) {
    state.token = null
    Cookies.remove('token')
  },

  [types.LOGOUT] (state) {
    state.user = null
    state.token = null
    Cookies.remove('token')
  },

  [types.UPDATE_USER] (state, { user }) {
    state.user = user
  }
}

// actions
export const actions = {
  async fetchUser ({ commit, state }) {
    try {
      console.log(state.token);
      const { data } = await axios.post('/api/get_user',{token:state.token})
      commit(types.FETCH_USER_SUCCESS, { user: data })
    } catch (e) {
      console.log(e);
      commit(types.FETCH_USER_FAILURE)
    }
  },

  updateUser ({ commit }, payload) {
    commit(types.UPDATE_USER, payload)
  },

  async logout ({ commit }) {
    try {
      await axios.post('/api/logout')
    } catch (e) { }

    commit(types.LOGOUT)
  },

  
  async registerUser ({commit}, payload){
    const { data } = await axios.post("/api/register",payload);
    if(data.success){
      document.location = "/login";
    }
  },
  async loginUser ({commit}, payload){
    const { data } = await axios.post("/api/login", payload);
    if(data.success) {
      commit(types.SAVE_TOKEN, {token:data.token, remember:true});
      document.location = "/myquestions";
    }
  }
}
