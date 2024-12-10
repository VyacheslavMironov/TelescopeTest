<script>
export default {
  name: "AlertComponent",
  props: {
    status: String,
    message: String
  }
}
</script>

<template>
  <div v-bind:class="'alert' + status" role="alert">
    {{ message }}
  </div>
</template>
