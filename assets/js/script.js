document.addEventListener('DOMContentLoaded', () => {

const services = [
    {
        icon: 'objectifs-24.png',
        title: 'Détermination de l\'objectif',
    },

    {
        icon: 'coureur-24.png',
        title: 'Ajustement du plan d\'entrainement',
    },

    
    {
        icon: 'applications-24.png',
        title: 'Analyse et suivi via l\'application Nolio',
    },

    {
        icon: 'messages-24.png',
        title: 'Contact illimité par messages',
    },

];

    document.querySelectorAll('.services').forEach((list) => {
        services.forEach((service) => {
            const item = document.createElement('li');
            item.classList.add('list-group-item');
    
            const img = document.createElement('img');
            img.src = `assets/icones/${service.icon}`; 
            img.classList.add('me-3', 'img-fluid');
    
            const title = document.createElement('span');
            title.innerHTML = service.title;

            item.appendChild(img);
            item.appendChild(title);
    
            list.appendChild(item);
        });
    });
    const servicesPremium = [
        {
            icon: 'objectifs-24.png',
            title: 'Détermination de l\'objectif',
        },
    
        {
            icon: 'coureur-24.png',
            title: 'Ajustement du plan d\'entrainement',
        },
    
        
        {
            icon: 'applications-24.png',
            title: 'Analyse et suivi via l\'application Nolio',
        },
    
        {
            icon: 'messages-24.png',
            title: 'Contact illimité par messages',
        },
        {
            icon: 'téléphone-24.png',
            title: 'Point téléphonique mensuel',
        },

        {
            icon: 'baskets-24.png',
            title: 'Conseils chaussures',
        },

        {
            icon: 'alimentation-vegan-24.png',
            title: 'Conseils nutritionnels',
        },
    ];

    document.querySelectorAll('.servicesPremium').forEach((list) => {
        servicesPremium.forEach((service) => {
            const item = document.createElement('li');
            item.classList.add('list-group-item');
    
            const img = document.createElement('img');
            img.src = `assets/icones/${service.icon}`; 
            img.classList.add('me-3', 'img-fluid');
    
            const title = document.createElement('span');
            title.textContent = service.title;
    
            item.appendChild(img);
            item.appendChild(title);
    
            list.appendChild(item);
        });
    });

const diplomes = [
    {
        year: 2019,
        title: "D.U. Kinésitherapie du sport - Université de Nantes",
    
    },

    {
        year: 2013,
        title: "Diplôme d'État de Masseur-Kinésithérapeute - Université de Poitiers",
    },
];

const ulDiplomes = document.getElementById('diplomes')
diplomes.forEach(diplome => {
    const li = document.createElement('li');
    li.innerHTML = `<p><strong>${diplome.year}</strong> ${diplome.title}</p>`;
    ulDiplomes.appendChild(li);
});

const formations = [
    {
        year: 2021,
        title: "La prise en charge du pied du coureur - La Clinique du Coureur",
    
    },

    {
        year: 2020,
        title: "Traitement du Syndrome Fémoro-patellaire - Physio Sport Et Performance",
    },
    {
        year: 2020,
        title: "Optimisation du renforcement musculaire - SRP Formation",
    },
    {
        year: 2019,
        title: "Positionnement cycliste - SRP Formation",
    },
    {
        year: 2019,
        title: "Formation de prévention des blessures en course à pied - La Clinique du Coureur",
    },
    {
        year: 2019,
        title: "Formation Tendinopathies du membre inférieur - Agence EBP",
    },
    {
        year: 2018,
        title: "Planification de l'entraînement - La Clinique du Coureur",
    },
    {
        year: 2018,
        title: "Formation Nouveautés dans la prévention des blessures en courses - La Clinique du Coureur",
    },
    {
        year: 2013,
        title: "Formation McKenzie - Institut McKenzie",
    },
];

const ulFormations = document.getElementById('formations')
formations.forEach(formation => {
    const li = document.createElement('li');
    li.innerHTML = `<p><strong>${formation.year}</strong> ${formation.title}</p>`;
    ulFormations.appendChild(li);
});

const experiences = [
    {
        year: "2021 - 2023",
        title: "Praticien - Stade Rochelais Rugby - La Rochelle",
    },

    {
        year: "2013 - 2022",
        title: "Cabinet - La Rochelle",
    },
];

const ulExperiences = document.getElementById('experiences')
experiences.forEach(experience => {
    const li = document.createElement('li');
    li.innerHTML = `<p><strong>${experience.year}</strong> ${experience.title}</p>`;
    ulExperiences.appendChild(li);
    
});

});

document.addEventListener('DOMContentLoaded', () => {
//Fonction qui permet de transformer les saisies (1ere lettre majuscule, le reste en minuscule)
const firstNameInput = document.getElementById('firstName');
const lastNameInput = document.getElementById('lastName');

const formatNameInput = (inputElement) => {
    const inputValue = inputElement.value.trim();
    const words = inputValue.split(' ');

const formattedWords = words.map(word => {
    return word.charAt(0).toUpperCase() + word.slice(1).toLowerCase();
});
    inputElement.value = formattedWords.join(' ');
};

firstNameInput.addEventListener('blur', () => {
    formatNameInput(firstNameInput);
});

lastNameInput.addEventListener('blur', () => {
    formatNameInput(lastNameInput);
});

});

