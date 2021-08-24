import axios from 'axios'
import * as types from '../mutation-types'

//state
export const state = {
    loom:"",
    question: "",
    file:{}
}

export const getters = {
    project: state => state.loom,
    question: state => state.question,
    file: state => state.file
}

export const mutations = {
    [types.FETCH_PROJECT_SUCCESS] (state, { project }) {
        console.log(project);
        state.project = project
    },
}

export const actions = {
    async submitQuestion({ commit, state }, payload) {
        let formdata = new FormData();
        let loom = this.getters["submit_question/loom"];
        formdata.append("loom", loom);
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