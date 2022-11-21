<template>
  <form @submit.prevent="submit">
    <p>
      Название: <input type="text" v-model="title">
    </p>
    <p>
      Цена: <input type="text" v-model="price">
    </p>
    <button type="submit">Отправить</button>
  </form>
</template>

<script>

export default {
  props: {
    onAdd: {
      type: Function,
      required: true
    }
  },
  data(){
    return {
      title: '',
      price: ''
    }
  },
  methods:{
    submit(){
      const recipe = {
        title: this.title.trim(),
        price: this.price.trim()
      }
      this.title = this.price = ''

      this.onAdd(recipe)
    }
  },
}

</script>

<style scoped>

</style>