const services = [
    {
        icon: 'visio-24.png',
        title: 'Visio de 45’ au début du coaching',
        description : 'Etablir un tour d’horizon de tes attentes, tes objectifs, ton historique.'
    },

    {
        icon: 'coureur-24.png',
        title: 'Évaluation de la VMA en Début de saison',
        description : 'Un point de départ précis pour personnaliser ton plan d\'entraînement.'
    },

    {
        icon: 'applications-24.png',
        title: 'Suivi personnalisé via l\'application Nolio',
        description : 'Je m\'engage à te répondre dans les 24 heures via la messagerie intégrée.',
        description : 'Contact illimité par messages.'
    },

    {
        icon: 'objectifs-24.png',
        title: 'Détermination d\'objectifs clairs',
        description : 'Ensemble, définissons tes objectifs à court, moyen et long terme.'
    },

    {
        icon: 'planification-24.png',
        title: 'Planification intelligente des séances d\'entraînement',
        description : 'Tes séances s\'affichent automatiquement sur ta montre le jour de l\'entraînement.',
        description : 'Au minimum 15 jours de visibilité sur ton plan d’entraînement.'
    },


    {
        icon: 'plan-24.png',
        title: 'Adaptation hebdomadaire du plan en fonction de ton agenda',
        description : 'Flexibilité pour s\'adapter à ta vie professionnelle et personnelle.',
        description : 'J\'adapte tes séances en fonction de tes contraintes professionnelles et familiales.',
    },

    {
        icon: 'stats-24.png',
        title: 'Analyse et suivi des données d\'entraînement',
        description : 'Des retours détaillés pour optimiser chaque session.',
        description : 'Contrôle de la charge pour la prévention des blessures.',
        description : 'Assurons-nous que tu progresses sans te blesser en intégrant judicieusement les phases de développement et de récupération.'
    },

    {
        icon: 'baskets-24.png',
        title: 'Conseils sur le choix des chaussures',
        description : 'En fonction de tes antécédents de blessures, le choix de la chaussure peut s’avérer important.',
        description : 'Nous aborderons également l’intérêt d’avoir plusieurs paires de chaussures, afin de varier les contraintes \ret ainsi favoriser les adaptations corporelles (musculaires, articulaires, tendineuses, osseuses…).',
    },

    {
        icon: 'conseiller-24.png',
        title: 'Conseils techniques',
        description : 'Conseils sur la foulée.',    
        description : 'Fiches renforcement musculaire.',    
        description : 'Conseils sur la psychologie du coureur, comment aborder une course au mieux, et mettre en place les bonnes stratégies de récupération.',    
    },

    {
        icon: 'alimentation-vegan-24.png',
        title: 'Conseils nutritionnels',
        description : 'Alimentation quotidienne.',
        description : 'Stratégie nutritionnelle à l’entraînement et le jour de la course.',
        description : 'Formulaire micro-nutrition à remplir en début de coaching.',
    },

];

const listGroup = document.querySelector('.list-group');

services.forEach(service => {
    const listItem = document.createElement('li');
    listItem.classList.add('list-group-item', 'dropdown');

    const img = document.createElement('img');
    img.src = `assets/icones/${service.icon}`;
    img.classList.add('me-3');

    const title = document.createTextNode(service.title);

    const button = document.createElement('button');
    button.classList.add('btn', 'btn-outline-alert', 'dropdown-toggle');
    button.type = 'button';
    button.setAttribute('data-bs-toggle', 'dropdown');
    button.setAttribute('aria-expanded', 'false');

    const dropdownMenu = document.createElement('ul');
    dropdownMenu.classList.add('dropdown-menu');

    const description = document.createElement('li');
    description.classList.add('dropdown-item');
    description.appendChild(document.createTextNode(service.description));

    dropdownMenu.appendChild(description);

    listItem.appendChild(img);
    listItem.appendChild(title);
    listItem.appendChild(button);
    listItem.appendChild(dropdownMenu);

    listGroup.appendChild(listItem);

});