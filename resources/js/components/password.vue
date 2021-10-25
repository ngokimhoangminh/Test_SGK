<template>
  <div>
    <input
      class="form-control password"
      :type="type"
      v-model="valueUpdate"
      :name="name"
      @keyup="onChange()"
    />
    <input
      class="form-control"
      type="hidden"
      :value="value"
      :name="name"
      v-if="isShow"
      ref="input"
    />
    <button type="button" class="btn btn-show" @click="onClick()">
      <i class="fa fa-eye" v-if="isPassword"></i>
      <i class="fas fa-eye-slash" v-else></i>
    </button>
  </div>
</template>

<script>
export default {
  props: {
    name: {
      type: String,
      required: true,
    },
    value: {
      type: String,
      required: false,
    },
  },
  data() {
    return {
      isShow: true,
      isPassword: true,
      valueUpdate: "",
      type: "password",
    };
  },
  methods: {
    onChange() {
      this.isShow = this.valueUpdate.length > 0 ? true : false;
    },
    onClick() {
      if (this.type == "password") {
        this.isPassword = false;
        this.type = "text";
      } else if (this.type == "text") {
        this.isPassword = true;
        this.type = "password";
      }
    },
  },
};
</script>

<style scoped>
.password {
  position: relative;
}
.btn-show {
  position: absolute;
  top: 2vw;
  right: 2vw;
}
</style>
