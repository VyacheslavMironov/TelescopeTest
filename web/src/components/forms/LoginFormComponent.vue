<script>
export default {
  name: "LoginFormComponent",
  data() {
    return {
      formTitle: 'Вход',
      buttonText: 'Войти',
      fields: [
        {
          fieldType: 'email',
          fieldId: 'email',
          description: 'Введите Email',
        },
        {
          fieldType: 'password',
          fieldId: 'password',
          description: 'Введите пароль',
        }
      ]
    }
  },
  methods: {
    sendForm: function() {

    }
  }
}
</script>

<template>
  <form>
    <div class="mb-3">
      <h3 class="text-center">{{ formTitle }}</h3>
    </div>
    <div v-for="item in fields"
         v-key="fields.fieldType"
         class="mb-3">
      <label v-bind:for="item.id" class="form-label">{{ item.description }}</label>
      <input v-bind:type="item.fieldType"
             class="form-control"
             v-bind:id="item.id">
    </div>
    <button type="button"
            class="btn btn-primary"
            @click="sendForm">{{ buttonText }}</button>
  </form>
</template>
