function submitsurvey() {
    const radios = document.getElementsByName("choose1");
    let selectedValue;

    for (const radio of radios) {
        if (radio.checked) {
            selectedValue = radio.value;
            break;
        }
    }

    switch (selectedValue) {
        case 'sg':
            window.location.href = "shooting.html";
            break;
        case 'sp':
            window.location.href = "single.html";
            break;
        case 'cwf':
            window.location.href = "chill.html";
            break;
        default:
            alert("PLEASE CHOOSE AT LEASTS ONE OPTION");
    }
}
