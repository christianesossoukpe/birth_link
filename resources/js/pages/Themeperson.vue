<template>
      <Nav />
  <Aside />
  <div class="h1">
      <h1 >Choisissez ici des cartes à personnaliser pour vos amis!</h1>
    </div>
    <div class="flex items-center justify-center min-h-screen p-6 bg-red-100 relative">
      <!-- Sidebar for Buttons -->
  
  
      <!-- Container for Cards -->
      <section class="grid grid-cols-1 gap-4 ml-8">
        <div v-show="activeCard === 1" class="card bg-white p-6 rounded-lg shadow-md 
        text-center flex items-center justify-center flex-col bg-cover" :style="{ minHeight: '800px', minWidth: '850px', backgroundColor: cardColor, backgroundImage: backgroundImage }">
          <div class="bg-white bg-opacity-75 p-4 rounded-lg shadow-lg">
            <h2 class="text-red-500 font-bold text-4xl mb-4">{{ cardTitle }}</h2>
            <textarea class="bg-transparent text-gray-700 font-semibold text-xl text-center w-full h-full resize-none focus:outline-none" rows="10" readonly>{{ cardText }}</textarea>
          </div>
          <div class="mt-4 space-x-4">
            <button @click="showForm" class="bg-red-500 text-white py-2 px-4 rounded
             hover:bg-red-600 transition">Personnaliser le texte</button>
            <button @click="sendText" class="bg-red-500 text-white py-2 px-4 rounded
             hover:bg-red-600 transition">Envoyer</button>
          </div>
        </div>
      </section>
  
      <!-- Modal -->
      <div v-show="isModalVisible" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
          <h2 class="text-xl font-bold mb-4">Confirmation</h2>
          <p class="mb-4">{{ modalMessage }}</p>
          <button @click="closeModal" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition">Fermer</button>
        </div>
      </div>
  
      <!-- Form Modal -->
      <div v-show="isFormModalVisible" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
        <div class="bg-white p-6 rounded-lg shadow-lg text-center w-3/4">
          <h2 class="text-xl font-bold mb-4">Personnaliser la Carte</h2>
          <form @submit.prevent="saveCustomization">
            <div class="grid grid-cols-2 gap-4">
              <!-- Form Fields -->
              <div class="mb-4">
                <label for="sender-email" class="block text-gray-700">Email de l'expéditeur</label>
                <input type="email" v-model="senderEmail" class="w-full p-2 border border-gray-300 rounded" required>
              </div>
              <div class="mb-4">
                <label for="receiver-email" class="block text-gray-700">Email du récepteur</label>
                <input type="email" v-model="receiverEmail" class="w-full p-2 border border-gray-300 rounded" required>
              </div>
              <div class="mb-4">
                <label for="username" class="block text-gray-700">Nom d'utilisateur</label>
                <input type="text" v-model="username" class="w-full p-2 border border-gray-300 rounded" required>
              </div>
              <div class="mb-4">
                <label for="title" class="block text-gray-700">Titre</label>
                <input type="text" v-model="cardTitle" class="w-full p-2 border border-gray-300 rounded" required>
              </div>
              <div class="mb-4">
                <label for="message" class="block text-gray-700">Message</label>
                <textarea v-model="cardText" class="w-full p-2 border border-gray-300 rounded" rows="4" required></textarea>
              </div>
              <div class="mb-4">
                <label for="photo" class="block text-gray-700">Photo</label>
                <input type="file" @change="handleFileUpload" class="w-full p-2 border border-gray-300 rounded">
              </div>
              <div class="mb-4">
                <label for="color" class="block text-gray-700">Couleur de fond</label>
                <input type="color" v-model="cardColor" class="w-full p-2 border border-gray-300 rounded">
              </div>
              <div class="mb-4 col-span-2">
                <label for="background" class="block text-gray-700">Choisir un fond d'anniversaire</label>
                <select v-model="selectedBackground" @change="updateBackgroundImage" class="w-full p-2 border border-gray-300 rounded">
                  <option value="">Sélectionner un fond</option>
                  <option value="url('https://placehold.co/850x990?text=Background+1')">Fond 1</option>
                  <option value="url('https://placehold.co/850x990?text=Background+2')">Fond 2</option>
                  <option value="url('https://placehold.co/850x990?text=Background+3')">Fond 3</option>
                </select>
              </div>
            </div>
            <div class="space-x-4">
              <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition">Enregistrer</button>
              <button type="button" @click="closeFormModal" class="bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600 transition">Annuler</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  import Aside from '@/Pages/Aside.vue';
  import Nav from '@/Pages/Nav.vue';
  // State variables
  const activeCard = ref(1);
  const cardTitle = ref("Joyeux anniversaire !");
  const cardText = ref("Que cette année t'apporte bonheur et succès. Que tous tes rêves deviennent réalité et que chaque jour soit rempli de joie et de rires. Profite de cette journée spéciale et de toutes les belles choses qu'elle t'apporte. Bon anniversaire !");
  const cardColor = ref("#ffffff");
  const backgroundImage = ref("");
  const isModalVisible = ref(false);
  const modalMessage = ref("Texte enregistré avec succès!");
  const isFormModalVisible = ref(false);
  const senderEmail = ref("");
  const receiverEmail = ref("");
  const username = ref("");
  const selectedBackground = ref("");
  
  // Methods
  const showCard = (cardNumber) => {
    activeCard.value = cardNumber;
  };
  
  const showForm = () => {
    cardTitle.value = cardTitle.value;
    cardText.value = cardText.value;
    isFormModalVisible.value = true;
  };
  
  const closeFormModal = () => {
    isFormModalVisible.value = false;
  };
  
  const closeModal = () => {
    isModalVisible.value = false;
  };
  
  const updateBackgroundColor = () => {
    cardColor.value = cardColor.value;
  };
  
  const updateBackgroundImage = () => {
    backgroundImage.value = selectedBackground.value;
  };
  
  const updateReceiverEmail = () => {
    receiverEmail.value = `${username.value}@example.com`;
  };
  
  const saveCustomization = () => {
    cardTitle.value = cardTitle.value;
    cardText.value = cardText.value;
    cardColor.value = cardColor.value;
  
    if (selectedBackground.value) {
      backgroundImage.value = selectedBackground.value;
    }
  
    isFormModalVisible.value = false;
    modalMessage.value = "Texte enregistré avec succès!";
    isModalVisible.value = true;
  };
  
  const sendText = () => {
    // Logic for sending the email can be added here
    modalMessage.value = "Message envoyé avec succès!";
    isModalVisible.value = true;
  };
  
  const handleFileUpload = (event) => {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = (e) => {
        backgroundImage.value = `url(${e.target.result})`;
      };
      reader.readAsDataURL(file);
    }
  };
  </script>
  
  <style scoped>
  .card {
    max-width: 250px;
    /* margin-bottom: 500 px; */
  }
  .bg-cover {
    background-size: cover;
    background-repeat: repeat;
  }
  h1{
    text-align: center;
font-size: 25px;
  }
  </style>
  