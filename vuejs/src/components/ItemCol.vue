<template>
  <div class="item">
    <p>ID: {{item.id}}</p>
    <p>Название: {{item.title}}</p>
    <p>Прайс: {{item.price}}</p>
  </div>
</template>

<script>

export default {
  name: "ItemCol",
  components: {},
  props: {
    item: {
      type: Object,
      required: true
    }
  }
}
</script>

<style scoped>
  .item{
    border: 1px solid black;
  }
</style>