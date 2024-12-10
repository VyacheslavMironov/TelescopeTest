<script>
  import AlertComponent from './components/AlertComponent.vue';
  import CardComponent from './components/CardComponent.vue';
  import SettingsFormComponent from './components/forms/SettingsFormComponent.vue';
  import LoginFormComponent from './components/forms/LoginFormComponent.vue';
  import {useUsersStore} from '@/stores/users.ts';
  import {useSettingsStore} from '@/stores/settings.ts';

  // let users = useUsersStore();
  // let settings = useSettingsStore();

  export default {
    name: "App",
    data() {
      return {
        user: true
      };
    },
    components: {
      AlertComponent,
      CardComponent,
      SettingsFormComponent,
      LoginFormComponent,
    },
    async beforeMount() {

    }
  }
</script>

<template>
  <main class="container">
    <div class="row mt-5 mb-5">
      <CardComponent>
        <SettingsFormComponent v-if="user" />
        <LoginFormComponent v-else />
      </CardComponent>
    </div>
  </main>
</template>
