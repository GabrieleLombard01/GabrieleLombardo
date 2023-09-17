const deleteForms = document.querySelectorAll('.delete-form');

deleteForms.forEach(form => {
    form.addEventListener('submit', e => {
        e.preventDefault();

        const hasConfirmed = confirm(`Sei proprio sicuro di eliminare l'elemento selezionato?`)
        if(hasConfirmed) form.submit();
    })
})