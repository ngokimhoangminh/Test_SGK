<template>
  <div>
    <label-name>Hình Ảnh</label-name>
    <div class="form-group mb-3">
      <input
        class="form-control"
        type="file"
        :name="name"
        @change="uploadImage"
      />
    </div>
    <div v-if="urlImage" class="mb-3">
      <img :src="urlImage" />
    </div>
  </div>
</template>
<script>
import Label from "./label";

export default {
  components: {
    "label-name": Label,
  },
  props: {
    name: String,
    urlImage: {
      type: String,
      required: false,
    },
  },
  data() {
    return {};
  },

  methods: {
    uploadImage(e) {
      const image = e.target.files[0];
      const reader = new FileReader();
      reader.onload = (e) => {
        this.urlImage = e.target.result;
      };
      reader.readAsDataURL(image);
    },
  },
};
</script>
