function searchGames() {
    var input, filter, containers, boxes, a, i, txtValue;
    input = document.getElementById('searchInput');
    filter = input.value.toUpperCase();
    containers = document.getElementsByClassName('container');
    
    for (i = 0; i < containers.length; i++) {
        boxes = containers[i].getElementsByClassName('box');
        for (var j = 0; j < boxes.length; j++) {
            a = boxes[j].getElementsByTagName("a")[0];
            txtValue = a.getAttribute("href").toUpperCase();
            if (txtValue.indexOf(filter) > -1) {
                containers[i].style.display = "";
                break;
            } 
            else {
                containers[i].style.display = "none";
            }
        }
    }
}