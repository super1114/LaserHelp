import axios from 'axios'
import * as types from '../mutation-types'

//state
export const state = {
    loom:"",
    question: "",
    categories:"",
    file:{},
    question_id:0
}

export const getters = {
    loom: state => state.loom,
    question: state => state.question,
    file: state => state.file,
    question_id: state => state.question_id
}

export const mutations = {
    [types.SAVE_QUOTE_TEMP] (state, { payload }) {
        state.question_id = payload;
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
            console.log(data);
            if(user==null){
                commit(types.SAVE_QUOTE_TEMP, { payload:data.question_id })
                router.push("/register");
                return;
            }else {
                document.location = "/myquestions"
            }
        } catch (e) {
            console.log(e);
        }
        
    },
}