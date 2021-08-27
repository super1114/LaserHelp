import axios from 'axios'
import Cookies from 'js-cookie'
import * as types from '../mutation-types'

//state
export const state = {
    questions:[]
}

export const getters = {
    questions: state => state.questions
}

export const mutations = {
    [types.FETCH_QUESTIONS_SUCCESS] (state, { questions }) {
        state.questions = questions
    },
    [types.FETCH_QUESTIONS_FAILED] (state) {
        state.questions = []
    }
}

export const actions = {
    async fetchQuestions({commit}) {
        const user = JSON.parse(JSON.stringify(this.getters["auth/user"]));
        try {
            const { data } = await axios.post('/api/get_myquestions',{id:user.user.id});
            commit(types.FETCH_QUESTIONS_SUCCESS, { questions:data.questions});
        } catch (error) {
            commit(types.FETCH_QUESTIONS_FAILED);
        }
    }
}