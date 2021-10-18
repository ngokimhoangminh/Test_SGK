<template>
  <button :type="type" class="btn btn-info" @click="handleOK()">
    <slot />
  </button>
</template>

<script>
export default {
  props: {
    type: {
      type: String,
      default: "button",
    },
  },
  data() {
    return {};
  },
  methods: {
    handleOK() {
      this.$emit("handleSubmit");
    },
  },
};
</script>
