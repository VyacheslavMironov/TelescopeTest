<script>
  import ConfirmationFormComponent from './forms/ConfirmationFormComponent.vue';
  export default {
    name: "PopupComponent",
    data() {
      return {
        buttonText: 'Сохранить',
        title: 'Подтвердите смену настроек',
      };
    },
    components: {
      ConfirmationFormComponent
    }
  }
</script>

<template>
  <button type="button"
          class="btn btn-primary"
          data-bs-toggle="modal"
          data-bs-target="#exampleModal">
    {{ buttonText }}
  </button>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">{{ title }}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ConfirmationFormComponent />
        </div>
      </div>
    </div>
  </div>
</template>