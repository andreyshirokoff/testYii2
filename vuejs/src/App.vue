<template>
  <div id="app">
    <Wrapper v-bind:items="items"/>
  </div>
</template>

<script>

import Wrapper from "@/components/Wrapper";
export default {
  name: 'App',
  components: {Wrapper},
  data(){
    return{
      items: [
        {
          id: 1,
          title: 'Пыльник',
          price: 50
        },
        {
          id: 2,
          title: 'Сальник',
          price: 300
        }
      ]
    }
  }
}
</script>

<style>
  html, body{
    height: 100%;
  }
  #app{
    height: 100%;
    display: flex;
    justify-content: center;
    padding-top: 40px;
  }
</style>
