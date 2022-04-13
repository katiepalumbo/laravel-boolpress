<template>
  <div>
      <Header/>
      <Main/>
      <Footer/>

  </div>
</template>

<script>

    import Main from '../components/Main';
    import Header from '../components/Header';
    import Footer from '../components/Footer';
    export default {
        Name: 'App',
        components: {
          Main,
          Header,
          Footer
        }
        
          

    };
</script>

<style>

</style>