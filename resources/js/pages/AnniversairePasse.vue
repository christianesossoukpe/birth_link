<template>
    <Aside />
    <Nav />
    <div class="h1">
      <h1 >Liste des anniversaires passés</h1>
    </div>
    <div class="container  bg-red-100 min-h-screen">
            <div class="card grid grid-cols-4 gap-8 mt-6" v-for="person in people" :key="person.name">
        <div class="card-header">Birthday Dashboard</div>
        <div class="card-content">
          <img class="profile-picture" :src="person.image" :alt="person.name">
          <div class="name">{{ person.name }}</div>
          <div class="role">{{ person.role }}</div>
          <div class="progress-bar">
            <div class="progress" :style="{ width: person.progress + '%' }"></div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
     import Aside from '@/Pages/Aside.vue';
  import Nav from '@/Pages/Nav.vue';
  const people = [
    {
      name: 'Henry Pauletta',
      role: 'Senior Developer',
      progress: 80,
      image: 'henry_pauletta.jpg'
    },
    {
      name: 'Evan Jefferson',
      role: 'Creative Director',
      progress: 70,
      image: 'evan_jefferson.jpg'
    },
    {
      name: 'Evan Jefferson',
      role: 'Creative Director',
      progress: 70,
      image: 'evan_jefferson.jpg'
    },
    {
      name: 'Evan Jefferson',
      role: 'Creative Director',
      progress: 70,
      image: 'evan_jefferson.jpg'
    },
    {
      name: 'Mark Thomson',
      role: 'Senior Designer',
      progress: 85,
      image: 'mark_thomson.jpg'
    },
    {
      name: 'Mark Thomson',
      role: 'Senior Designer',
      progress: 85,
      image: 'mark_thomson.jpg'
    },
    {
      name: 'Alice McKenzie',
      role: 'Senior Copywriter',
      progress: 75,
      image: 'alice_mckenzie.jpg'
    },
    {
      name: 'Jack Ro',
      role: 'Art Director',
      progress: 80,
      image: 'jack_ro.jpg'
    },
  
    {
      name: 'Anastasia Grousse',
      role: 'Senior Designer',
      progress: 90,
      image: 'anastasia_grousse.jpg'
    },
    {
      name: 'Anastasia Grousse',
      role: 'Senior Designer',
      progress: 90,
      image: 'anastasia_grousse.jpg'
    }
  ]
  </script>
  
  <style scoped>
  .container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    /* margin: 20px; */
    margin-left: 200px;
  }
  
  .card {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    margin: 30px;
    overflow: hidden;
    width: 250px;
    height: 270px;
    margin-top: 60px;
  }
  h1{
    text-align: center;
font-size: 25px;
  }
  
  .card-header {
    background-color: #cc0000;
    color: white;
    padding: 10px;
    text-align: center;
  }
  
  .card-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
  }
  
  .profile-picture {
    border-radius: 50%;
    height: 70px;
    width: 100px;
  }
  
  .name {
    font-size: 18px;
    font-weight: bold;
    margin-top: 10px;
  }
  
  .role {
    color: #666666;
    font-size: 14px;
    margin-top: 5px;
  }
  Aside{
    margin-top: 100px;
  }
  .progress-bar {
    background-color: #f2f2f2;
    border-radius: 10px;
    height: 10px;
    margin-top: 10px;
    width: 100%;
  }
  
  .progress {
    background-color: #cc0000;
    border-radius: 10px;
    height: 100%;
  }
  </style>