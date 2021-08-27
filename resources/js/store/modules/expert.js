import axios from 'axios'
import * as types from '../mutation-types'

// state
export const state = {
  
}

// getters
export const getters = {
  
}

// mutations
export const mutations = {
  [types.BECAME_EXPERT] (state) {
    
  }
}

// actions
export const actions = {
  async become_expert ({ commit }, {id}) {
    try {
      const { data } = await axios.post("/api/become_expert", {id:id});
      
      if(data.status=="success"){
        document.location = "/get_clients";
      }
    } catch (e) {
      
    }
  }
}
