function submitsurvey() {
    const radios = document.getElementsByName("choose2");
    let selectedValue;

    for (const radio of radios) {
        if (radio.checked) {
            selectedValue = radio.value; 
            break;
        }
    }
    
    switch (selectedValue) {
        case 'fps':
            window.location.href = "fps.html";
            break;
        case 'br':
            window.location.href = "br.html";
            break;
        case 'oba':
            window.location.href = "oba.html";
            break;
        default:
            alert("PLEASE CHOOSE AT LEAST ONE OPTION"); 
    }
}
