function submitsurvey() {
    const radios = document.getElementsByName("choose3");
    let selectedValue;

    for (const radio of radios) {
        if (radio.checked) {
            selectedValue = radio.value;
            break;
        }
    }

    switch (selectedValue) {
        case 'story':
            window.location.href = "story.html";
            break;
        case 'survive':
            window.location.href = "survive.html";
            break;
        case 'grinding':
            window.location.href = "grinding.html";
            break;
        default:
            alert("PLEASE CHOOSE AT LEAST ONE OPTION");
    }
}
