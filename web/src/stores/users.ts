import { defineStore } from 'pinia'
import type { User } from '../common/models/User';
import type {Settings} from "../common/models/Settings";


export const useUsersStore = defineStore('users',  {
    state: () => ({
        userModels: [] as User[],
    }),

    getters: {
        getUserModels: (state) => state.userModels,
    },

    actions: {
        userModelsById(id: string | string[]): Promise<void> {

        }
    }
})