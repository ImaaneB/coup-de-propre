const dateInput = document.querySelector("#date_souhaitee");
const prestationSelect = document.querySelector("#prestation");

// Empêche de choisir une date passée dans le calendrier du navigateur.
if (dateInput) {
    const maintenant = new Date();
    const decalage = maintenant.getTimezoneOffset() * 60000;
    const dateLocale = new Date(maintenant.getTime() - decalage)
        .toISOString()
        .slice(0, 10);

    dateInput.min = dateLocale;
}

// Préselectionne la prestation choisie dans sa carte.
document.querySelectorAll("[data-prestation]").forEach((lien) => {
    lien.addEventListener("click", () => {
        if (prestationSelect) {
            prestationSelect.value = lien.dataset.prestation;
        }
    });
});