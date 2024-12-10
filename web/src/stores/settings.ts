import { defineStore } from 'pinia'
import type { Settings } from '../common/models/Settings';


export const useSettingsStore = defineStore('settings',  {
    state: () => ({
        settingsModels: [] as Settings[],
    }),

    getters: {
        getSettingsModels: (state) => state.settingsModels,
    },

    actions: {
        settingsModelsById(id: string | string[]): Promise<void> {

        }
    }
})
