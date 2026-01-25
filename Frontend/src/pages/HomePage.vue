<template>
  <section class="hero">
    <h1>Welcome to My DBA Portfolio</h1>
    <p>I specialize in Oracle, MySQL, PostgreSQL, Linux & Backup Systems.</p>
    <router-link to="/projects" class="btn">View Projects</router-link>
  </section>
</template>

<style scoped>
.hero {
  text-align: center;
  padding: 80px 20px;
  background: #f5f5f5;
}
.btn {
  display: inline-block;
  margin-top: 15px;
  padding: 10px 20px;
  background: #007bff;
  color: white;
  text-decoration: none;
  border-radius: 5px;
}
.btn:hover {
  background: #0056b3;
}
</style>
