function submitsurvey() {
    const radios = document.getElementsByName("popcorn1");
    let selectedValue;

    for (const radio of radios) {
        if (radio.checked) {
            selectedValue = radio.value;
            break;
        }
    }

    switch (selectedValue) {
        case 'action':
            window.location.href = "action.html";
            break;
        case 'brain':
            window.location.href = "brain.html";
            break;
        case 'horror':
            window.location.href = "horror.html";
            break;
        default:
            alert("PLEASE CHOOSE AT LEAST ONE OPTION");
    }
}