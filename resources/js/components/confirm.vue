<template>
  <a class="btn btn-danger" @click="onClick()">
    <i class="fas fa-trash-alt"></i>
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
    name: {
      type: String,
      required: false,
    },
  },
  methods: {
    onClick() {
      Swal.fire({
        title: `Bạn có chắc muốn xóa ${this.name} không ???`,
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Đồng ý",
        cancelButtonText: "Hủy",
      }).then((result) => {
        this.$emit("onDelete");
      });
    },
  },
};
</script>
