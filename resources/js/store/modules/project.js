import axios from 'axios'
import Cookies from 'js-cookie'
import * as types from '../mutation-types'

//state
export const state = {
    project:null,
    resources: [],
}

export const getters = {
    project: state => state.project,
    resources: state => state.resources
}

export const mutations = {
    [types.FETCH_PROJECT_SUCCESS] (state, { project }) {
        console.log(project);
        state.project = project
    },

    [types.FETCH_PROJECT_FAILED] (state) {
        state.project = null
    },

    [types.FETCH_RESOURCES_SUCCESS] (state, { resources }) {
        state.resources = resources;
    },

    [types.UPLOAD_RESOURCE_SUCCESS] (state, { resource }) {
        state.resources.push(resource);
    },

    [types.UPLOAD_RESOURCE_FAILED] (state) {
        
    },

    [types.FETCH_RESOURCES_FAILED] (state) {
        state.resources = [];
    },

    [types.UPDATE_RESOURCES] (state, { resources }) {
        state.resources = resources
    }
}

export const actions = {
    async fetchProject({commit}, id) {
        try {
            const { data } = await axios.get('/api/'+id);
            commit(types.FETCH_PROJECT_SUCCESS, { project:data.project});
        } catch (error) {
            commit(types.FETCH_PROJECT_FAILED);
        }
    },
    async fetchResources({ commit }, id) {
        try {
            const {data} = await axios.get('/api/'+id+'/resources')
            commit(types.FETCH_RESOURCES_SUCCESS, { resources: data.resources})
        } catch (e) {
            commit(types.FETCH_RESOURCES_FAILED);
        }
    },
    async uploadResource({ commit, state }, payload) {
        let formdata = new FormData();
        let project = this.getters["project/project"];
        formdata.append("resource", payload);
        try {
            const { data } = await axios.post("/api/"+project.id+"/uploadResource",
                formdata,
                {
                    headers: {
                    'Content-Type': 'multipart/form-data'
                    }
                }
            )
            commit(types.UPLOAD_RESOURCE_SUCCESS, {resource : data.resource});
        } catch (e) {
            commit(types.UPLOAD_RESOURCE_FAILED);
        }
        
    },
}