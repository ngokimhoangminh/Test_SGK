<template>
  <div :class="className" role="alert" v-show="message">
    {{ message }}
  </div>
</template>

<script>
export default {
  props: {
    className: {
      type: String,
      default: "alert alert-success",
    },
    message: {
      type: String,
      required: false,
    },
  },
};
</script>
