# Workflow typique Git

## 1. Forker le repo
Un collaborateur (disons Christiane) fork le dépôt origin sur son propre compte Github. Cela crée une copie personnelle du repo.
## 2. Cloner le fork
Christiane clone son fork sur sa machine locale:
```bash
git clone https://github.com/sossoukpechritiane/projet-x.git
cd projet-x
```
## 3. Configurer les remotes
Christiane configure le repo original comme remote pour son garder son fork à jour:
```bash
git remote add base https://github.com/tiburcekouagou/projet-x.git
```

## 4. Créer une branche pour la fonctionnalité
Avant d'apporter des modifications, elle crée une nouvelle branche pour sa fonctionnalité
```bash
git checkout -b nouvelle-fonctionnalité
```

## 5. Apporter des modifications
Christiane effectue les modifications nécessaires dans le code et les valides:
```bash
git add .
git commit -m "Ajout de la nouvelle fonctionnalité"
```

## 6. Pousser les modifications
Elle pousse sa branche vers son fork
```bash
git push origin nouvelle-fonctionnalité
```

## 7. Soumettre un pull request
Christiane se rend sur Github et soumet un PR de sa branche vers la branche principale du repo "upstream".

## 8. Révision du PR
Les mainteneurs du repo original examinent le PR. Ils peuvent poser des questions ou demander des modifications.

## 9. Gestion des conflits
si des conflits sont détectés (par exemple, d'autres contributions ont été fusionnées dans la branche principale), Christiane doit:
1. Mettre à jour son fork:
````bash
git fetch base
git checkout main
git merge base/main
```

2. Retourner à sa branche:
```bash
git checkout nouvelle-fonctionnalité
```

3. Fusionner les modifications:
```bash
git merge main
```

4. Résoudre les conflits dans les fichiers, puis les valider:
```bash
git add .
git commit -m "Résolution des conflits"
```







git remote add base8 https://github.com/godwinsodogandji/birth_link.git

 git fetch base8
From https://github.com/godwinsodogandji/birth_link
 * [new branch]      Ange       -> base8/Ange
 * [new branch]      Chirac     -> base8/Chirac
 * [new branch]      elyna      -> base8/elyna
 * [new branch]      godwin     -> base8/godwin
 * [new branch]      main       -> base8
git pull base8 Chirac

git checkout -b christiana




<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cartes avec Boutons</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    .card {
      max-width: 250px;
    }
    .hidden {
      display: none;
    }
  </style>
</head>
<body class="flex items-center justify-center min-h-screen p-6 bg-red-100">
  <!-- Sidebar for Buttons -->
  <div class="space-y-6 mr-20">
    <button onclick="showCard(1)"  style="background-color: rgb(220,20,60);" class="text-white py-2 px-4 rounded w-150  transition block">Carte de voeux n°1</button>
    <button onclick="showCard(2)" style="background-color: rgb(220,20,60);" class="text-white py-2 px-4 rounded w-150  transition block">Carte de voeux n°2</button>
    <button onclick="showCard(3)" style="background-color: rgb(220,20,60);" class="text-white py-2 px-4 rounded w-150  transition block">Carte de voeux n°3</button>
    <button onclick="showCard(4)" style="background-color: rgb(220,20,60);" class="text-white py-2 px-4 rounded w-150  transition block">Carte de voeux n°4</button>
    <button onclick="showCard(5)" style="background-color: rgb(220,20,60);" class="text-white py-2 px-4 rounded w-150 transition block">Carte de voeux n°5</button>
    <button onclick="showCard(6)" style="background-color: rgb(220,20,60);" class="text-white py-2 px-4 rounded w-150
      transition block">Carte de voeux n°6</button>
  </div>
</body>



<!-- Container for Cards -->
<section class="grid grid-cols-1 gap-4 ml-8">
  <!-- Card 1 -->
  <div id="card-1" class="card hidden  p-6 mt-25 rounded-lg shadow-md text-center
       flex items-center justify-center flex-col bg-cover bg-no-repeat bg-center relative" 
       style="background-image: url('/images/carte1.jpg'); width: 700px; max-width: 100%; height: 500px;">
       <div   style="background-color:#FEBFD2;" class="shadow-lg p-6 rounded-full mt-20">
    <p class="text-black font-semibold text-xl">Joyeux anniversaire !</p>
    <p class="text-black font-semibold text-xl">Que cette année t'apporte</p>
    <p class="text-black font-semibold text-xl"> bonheur et succès.</p>
</div>
    <button style="background-color: #e0115f;" class="absolute bottom-4 right-4 text-white py-2 px-4 rounded hover:bg-blue-600 transition">Envoyer</button>
  </div>

  <!-- Card 2 -->
  <div id="card-2" class="card hidden bg-blue-100 p-6 rounded-lg shadow-md text-center
       flex items-center justify-center flex-col bg-cover bg-no-repeat bg-center relative" 
       style="background-image: url('/images/cartee2.png'); width: 700px; max-width: 100%; height: 500px;">
       <div class="flex ">
<img 
  src="/images/iconannif.png" 
  alt="Icône anniversaire" 
  class="w-25 h-20 mr-5 mb-10 "
/>
<img 
  src="/images/iconannif.png" 
  alt="Icône anniversaire" 
  class="w-25 h-20 mr-5 "
/>
<img 
  src="/images/iconannif.png" 
  alt="Icône anniversaire" 
  class="w-25 h-20 mr-5"
/>

</div>
    <p class="text-black font-bold text-lg">Joyeux anniversaire!</p>
    <p class="text-black font-semibold text-xl">Félicitations pour cette nouvelle année de vie.</p>
    <p class="text-black font-normal text-base">Que tous tes rêves deviennent réalité !</p>
    <button  style="background-color: #e0115f;" class="absolute bottom-4 right-4  text-white py-2 px-4 rounded hover:bg-blue-600 transition">Envoyer</button>
  </div>

  <!-- Card 3 -->
  <div id="card-3" class="card hidden bg-blue-100 p-6 rounded-lg shadow-md text-center
       flex items-center justify-center flex-col bg-cover bg-no-repeat bg-center relative" 
       style="background-image: url('/images/carte3.png'); width: 700px; max-width: 100%; height: 500px;">
       <div class="flex ">
        <img 
        src="/images/feux.png" 
        alt="Icône anniversaire" 
        class="w-25 h-20 mr-5"
      />
        <img 
        src="/images/feux.png" 
        alt="Icône anniversaire" 
        class="w-25 h-20 mt-10  mr-5"
      />
        <img 
        src="/images/feux.png" 
        alt="Icône anniversaire" 
        class="w-25 h-20 mr-5"
      />
       </div>
       <div class="shadow-lg p-6 rounded-full mt-20 bg-white">
    <p class="text-black font-semibold text-xl">Que ton anniversaire </p>
    <p class="text-black font-semibold text-xl">soit rempli de rires</p>
    <p class="text-black font-semibold text-xl">et de moments précieux.</p>
        <p class="text-black font-semibold text-xl">Heureux jour!!</p>
  </div>
    <button  style="background-color: #e0115f;"class="absolute bottom-4 right-4  text-white py-2 px-4 rounded hover:bg-blue-600 transition">Envoyer</button>
  </div>

  <!-- Card 4 -->
  <div id="card-4" class="card hidden bg-blue-100 p-6 rounded-lg shadow-md text-center
       flex items-center justify-center flex-col bg-cover bg-no-repeat bg-center relative" 
       style="background-image: url('/images/carte4.png');width: 700px; max-width: 100%; height: 500px;">
       <div class=" p-6  mt-40">
    <p class="text-black font-semibold text-xl">Bon anniversaire !</p>
    <p class="text-black font-semibold text-xl">Que la joie et la réussite</p>
    <p class="text-black font-semibold text-xl">t'accompagnent tout au long</p>
    <p class="text-black font-semibold text-xl"> de l'année à venir.</p>
       </div>
    <button  style="background-color: #e0115f;" class="absolute bottom-4 right-4 text-white py-2 px-4 rounded hover:bg-blue-600 transition">Envoyer</button>
  </div>

  <!-- Card 5 -->
  <div id="card-5" class="card hidden bg-blue-100 p-6 rounded-lg shadow-md text-center
       flex items-center justify-center flex-col bg-cover bg-no-repeat bg-center relative" 
       style="background-image: url('/images/carte5.png');width: 700px; max-width: 100%; height: 500px;">
       <div class=" p-6  mb-15">
    <p class="text-black font-semibold text-2xl">Tous mes vœux de bonheur </p>
    <p class="text-black font-semibold text-2xl">pour cette journée spéciale.</p>
    <p class="text-black font-semibold text-2xl">Que l'amour et la chance</p>
    <p class="text-black font-semibold text-2xl">soient avec toi !</p>
  </div>
    <button style="background-color: #e0115f;" class="absolute bottom-4 right-4  text-white py-2 px-4 rounded hover:bg-blue-600 transition">Envoyer</button>
  </div>

  <!-- Card 6 -->
  <div id="card-6" class="card hidden bg-blue-100 p-6 rounded-lg shadow-md text-center
  flex items-center justify-center flex-col bg-cover bg-no-repeat bg-center relative" 
  style="background-image: url('/images/design.png'); width: 700px; max-width: 100%; height: 500px;">
  <div class="bg-white w-60 h-60 rounded-full   items-center justify-center text-black">
    <p class="text-black mt-14 font-semibold text-xl">Joyeux anniversaire!</p>
    <p class="text-black font-semibold text-xl">Que cette nouvelle</p>
    <p class="text-black font-semibold text-xl">année soit encore </p>
    <p class="text-black font-semibold text-xl"> meilleure que la précédente.</p>
  </div>
  
<button  style="background-color: #e0115f;" class="absolute bottom-4 right-4  text-white py-2 px-4 rounded hover:bg-blue-600 transition">Envoyer</button>
</div>

</section>


  </div>

  <script>
    function showCard(cardNumber) {
      // Cache all cards
      document.querySelectorAll('.card').forEach(card => card.classList.add('hidden'));

      // Show the selected card
      document.getElementById('card-' + cardNumber).classList.remove('hidden');
    }
  </script>
</body>
</html>





<template>
  <Nav />
  <Aside />
  <div class="flex items-center justify-center min-h-screen p-6 bg-red-100">
    <!-- Modal d'envoi d'image dans la DB -->
    <div v-if="showModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-10">
      <div class="bg-white p-6 rounded-lg shadow-lg w-1/2">
        <h3 class="text-center font-semibold text-xl mb-4">Upload Image</h3>
        <input type="file" @change="handleFileChange" class="w-full mb-4" />
        <textarea v-model="description" placeholder="Entrez une description..." class="w-full mb-4 p-2 border rounded"></textarea>
        <button @click="uploadImage" class="bg-[#a35d71] text-white py-2 px-4 rounded w-full">Envoyer l'image</button>
        <button @click="closeUploadModal" class="bg-gray-500 text-white py-2 px-4 rounded mt-4 w-full">Fermer</button>
        <!-- Message de succès -->
        <div v-if="uploadSuccessMessage" class="text-green-500 text-center mt-4">{{ uploadSuccessMessage }}</div>
      </div>
    </div>

    <div class="space-y-6 mr-20">
    </div>

    <!-- Conteneur pour les cartes -->
    <section id="sessioncard" class="grid grid-cols-4 gap-8 mt-6">
      <div v-for="card in paginatedCards" :key="card.id" class="card-container">
        <img
          :src="`http://127.0.0.1:8000/${card.image_path}`"
          alt="Image de la carte"
          class="rounded shadow-md w-full h-60 object-cover cursor-pointer"
          @click="openCardModal(card)"
        />
        <p class="text-black text-center mt-4">{{ card.description }}</p>
      </div>
      <!-- Pagination -->
    <div class="flex justify-center items-center space-x-4 mt-6 mb-1">
      <button @click="changePage('prev')" :disabled="currentPage === 1" class="bg-[#a35d71] text-white py-2 px-3 rounded disabled:opacity-50">
        Précédent
      </button>
      <span class="text-lg font-semibold">{{ currentPage }} / {{ totalPages }}</span>
      <button @click="changePage('next')" :disabled="currentPage === totalPages" class="bg-[#a35d71] text-white py-2 px-3 rounded disabled:opacity-50">
        Suivant
      </button>
      <button @click="openUploadModal" class="bg-[#a35d71] text-white py-2 px-3 rounded disabled:opacity-50">
       ajouter
      </button>
    </div>
    </section>

    <!-- Modale dynamique de la carte -->
    <div v-if="activeCard" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-10">
      <div class="bg-white p-6 rounded-lg shadow-lg w-1/3 relative">
        <!-- Bouton de fermeture -->
        <button
          @click="closeCardModal"
          class="absolute top-4 right-4 h-12 w-12 bg-red-500 text-white text-2xl rounded-full flex items-center justify-center"
        >
          &times;
        </button>

        <!-- Contenu de la modale -->
        <div class="card-container flex flex-col items-center justify-center space-y-4">
          <img
            :src="`http://127.0.0.1:8000/${activeCard.image_path}`"
            alt="Image"
            class="rounded w-full h-60 object-cover mb-4"
          />
          <p class="text-center text-lg font-semibold">{{ activeCard.description }}</p>
        </div>

        <!-- Bouton d'envoi -->
        <button
          @click="sendCard(activeCard)"
          class="bg-[#a35d71] flex justify-center items-center text-white py-2 px-4 rounded hover:bg-[#a35d71] ml-[150px] w-40 m-auto"
        >
          Envoyer
        </button>
      </div>
    </div>
  </div>
</template>


<script setup>
import Nav from '@/Pages/Nav.vue';
import Aside from '@/Pages/Aside.vue';
import axios from 'axios';
import { ref, computed, onMounted } from 'vue';

const cards = ref([]);
const currentPage = ref(1);
const cardsPerPage = 8;
const activeCard = ref(null);
const showModal = ref(false);
const description = ref("");
const file = ref(null);

// Message de succès après l'upload
const uploadSuccessMessage = ref("");

// Fonction pour récupérer les cartes
const fetchCards = async () => {
  try {
    const response = await axios.get(route('themes-populaires'));
    if (response.data && response.data.cards) {
      cards.value = response.data.cards;
    } else {
      console.error('Structure de réponse inattendue :', response.data);
    }
  } catch (error) {
    console.error('Erreur lors de la récupération des cartes :', error);
  }
};

onMounted(() => {
  fetchCards();
});

// Pagination
const paginatedCards = computed(() => {
  const startIndex = (currentPage.value - 1) * cardsPerPage;
  const endIndex = startIndex + cardsPerPage;
  return cards.value.slice(startIndex, endIndex);
});

const totalPages = computed(() => {
  return Math.ceil(cards.value.length / cardsPerPage);
});

const changePage = (direction) => {
  if (direction === 'next' && currentPage.value < totalPages.value) {
    currentPage.value++;
  } else if (direction === 'prev' && currentPage.value > 1) {
    currentPage.value--;
  }
};

// Gestion de la modale pour l'upload
const openUploadModal = () => {
  showModal.value = true;
};

const closeUploadModal = () => {
  showModal.value = false;
  description.value = "";
  file.value = null;
  uploadSuccessMessage.value = ""; // Réinitialiser le message de succès
};

const handleFileChange = (event) => {
  const selectedFile = event.target.files[0];
  if (selectedFile) {
    file.value = selectedFile;
  }
};

const uploadImage = async () => {
  try {
    const formData = new FormData();
    formData.append('image', file.value);
    formData.append('description', description.value);

    const response = await axios.post(route('store-theme'), formData);

    // Fermer le modal et afficher le message de succès
    showModal.value = false;
    uploadSuccessMessage.value = "Image téléchargée avec succès !"; 
  } catch (error) {
    console.error('Erreur lors du téléchargement de l\'image', error);
  }
};

// Gestion de la modale pour la carte
const openCardModal = (card) => {
  activeCard.value = card;
};

const closeCardModal = () => {
  activeCard.value = null;
};

const sendCard = async (card) => {
  try {
    const response = await axios.post(route('send-card'), { card });
    console.log('Réponse après envoi:', response.data);
    closeCardModal(); // Ferme la modale après l'envoi
  } catch (error) {
    console.error('Erreur lors de l\'envoi de la carte :', error);
  }
};
</script>

<style scoped>
.card-container {
  max-width: 450px;
}
.card-container img {
  width: 1000px;
  height: 300px;
  object-fit: cover;
}
#sessioncard {
  margin-left: 250px;
}
button:focus {
  outline: none;
}

button.absolute.top-4.right-4 {
  width: 48px;
  height: 48px;
  font-size: 1.5rem;
}

.card-container.flex {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
}
</style>



































