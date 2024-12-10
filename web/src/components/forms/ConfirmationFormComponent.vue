<script>
  export default {
    name: "ConfirmationFormComponent",
    data() {
      return {
        buttonText: 'Отправить код',
        methods: [
          {
            title: 'Отправить SMS код',
            fields: [
              {
                fieldType: 'tel',
                fieldId: 'phone',
                description: 'Введите номер телефона',
              },
              {
                fieldType: 'checkbox',
                fieldId: 'userPhone',
                description: 'Использовать текущий номер',
              }
            ]
          },
          {
            title: 'Отправить код на почту',
            fields: [
              {
                fieldType: 'email',
                fieldId: 'email',
                description: 'Введите адрес электронной почты',
              },
              {
                fieldType: 'checkbox',
                fieldId: 'userEmail',
                description: 'Использовать текущий адрес электронной почты',
              }
            ]
          },
          {
            title: 'Отправить код через Telegram',
            fields: []
          }
        ],
        activeTabIndex: 0,
      };
    },
    methods: {
      getConfirmationCodeForm: function() {

      },
      sendConfirmationForm: function() {

      }
    }
  }
</script>

<template>
  <form>
    <div class="row">
      <ul class="nav nav-tabs" role="tablist">
        <li v-for="(method, index) in methods"
            :key="method.title"
            class="nav-item"
            :class="{ 'active': activeTabIndex === index }">
          <a class="nav-link"
             :class="{ 'active': activeTabIndex === index }"
             :href="'#' + method.title"
             @click.prevent="activeTabIndex = index"
             role="tab"
             :aria-selected="activeTabIndex === index"
             :aria-controls="method.title">
            {{ method.title }}
          </a>
        </li>
      </ul>
    </div>

    <div v-for="(method, index) in methods"
         :key="method.title"
         class="tab-content"
         :class="{ 'active': activeTabIndex === index }">
      <div v-for="field in method.fields"
           :key="field.fieldId"
           class="tab-pane fade show"
           :class="{ 'active': activeTabIndex === index }">
        <div class="mt-5 mb-3">
          <section v-if="field.fieldType !== 'checkbox'">
            <label :for="field.fieldId" class="form-label">{{ field.description }}</label>
            <input :type="field.fieldType"
                   class="form-control"
                   :id="field.fieldId">
          </section>
          <section v-else>
            <div class="form-check">
              <input class="form-check-input" :type="field.fieldType" :id="field.fieldId">
              <label class="form-check-label" :for="field.fieldId">
                {{ field.description }}
              </label>
            </div>
          </section>
        </div>
      </div>
    </div>

    <button type="button"
            class="btn btn-primary"
            @click="getConfirmationCodeForm">{{ buttonText }}</button>
  </form>
</template>
