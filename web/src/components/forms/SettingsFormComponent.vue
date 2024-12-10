<script>
import PopupComponent from "@/components/PopupComponent.vue";

export default {
  name: "SettingsFormComponent",
  data() {
    return {
      formTitle: 'Настройки',
      buttonText: 'Сохранить',
      fields: [
        {
          fieldType: 'text',
          fieldId: 'username',
          description: 'Никнейм профиля',
        },
        {
          fieldType: 'tel',
          fieldId: 'phone',
          description: 'Номер телефона',
        },
        {
          fieldType: 'email',
          fieldId: 'email',
          description: 'Адрес электронной почты',
        },
        {
          fieldType: 'password',
          fieldId: 'password',
          description: 'Введите пароль',
        },
        {
          fieldType: 'password',
          fieldId: 'passwordDouble',
          description: 'Введите пароль повторно',
        }
      ]
    }
  },
  components: {
    PopupComponent
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
    <PopupComponent />
  </form>
</template>
