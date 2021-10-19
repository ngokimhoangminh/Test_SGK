<template>
  <a
    class="btn btn-danger"
    :href="action"
    onclick="return confirm('Bạn muốn xóa sản phẩm này không?');"
  >
    Xóa
  </a>
</template>
<script>
import Button from "./button.vue";

export default {
  components: {
    "button-action": Button,
  },
  props: {
    action: {
      type: String,
    },
  },
};
</script>
