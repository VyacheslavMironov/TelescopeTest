<script>
export default {
  name: "CardComponent"
}
</script>

<template>
  <div class="card col-8 mx-auto">
    <div class="card-body">
      <slot></slot>
    </div>
  </div>
</template>
