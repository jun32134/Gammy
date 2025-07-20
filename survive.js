function submitsurvey(){
    const radios = document.getElementsByName("popcorn2");
    let selectedValue;

    for(const radio of radios){
        if(radio.checked){
            selectedValue = radio.value;
            break;
        }
    }

    switch(selectedValue){
        case 'zombie':
            window.location.href = "zombie.html";
            break;
        case 'roam':
            window.location.href = "roam.html";
            break;
        case 'horror1':
            window.location.href = "horror1.html";
            break;
        default:
            alert("PLEASE CHOOSE AT LEAST ONE OPTION");
    }
}