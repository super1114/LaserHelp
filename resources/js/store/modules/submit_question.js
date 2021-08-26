import axios from 'axios'
import * as types from '../mutation-types'

//state
export const state = {
    loom:"",
    question: "",
    categories:"",
    file:{}
}

export const getters = {
    project: state => state.loom,
    question: state => state.question,
    file: state => state.file
}

export const mutations = {
    [types.SAVE_QUOTE_TEMP] (state, { payload }) {
        console.log(payload);
        state.loom = payload.loom;
        state.question = payload.question;
        state.categories = payload.categories;
        state.file = payload.file;
    },
}

export const actions = {
    async submitQuestion({ commit, state }, payload) {
        console.log(payload);
        const user = this.getters["auth/user"];
        const router = payload.router;
        let formdata = new FormData();
        formdata.append("loom", payload.loom);
        formdata.append("question", payload.question);
        formdata.append("categories", payload.categories);
        formdata.append("file", this.getters["submit_question/file"]);
        try {
            const { data } = await axios.post("/api/submit_question",
                formdata,
                {
                    headers: {
                    'Content-Type': 'multipart/form-data'
                    }
                }
            )
        } catch (e) {
            
        }
        if(user==null){
            commit(types.SAVE_QUOTE_TEMP, { payload:payload })
            router.push("/register");
            return;
        }
    },
}