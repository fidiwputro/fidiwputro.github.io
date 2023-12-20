function highlight(element) {
    var elements = document.querySelectorAll('.iphone-item');
    var isSelected = element.classList.contains('selected');

    elements.forEach(function (element) {
        element.classList.remove('selected');
        element.style.border = '1px solid #ccc';
        element.style.transform = 'scale(1)';
    });

    if (!isSelected) {
        element.classList.add('selected');
        element.style.border = '2.5px solid #007BFF';
        element.style.transform = 'scale(1.1)';
    }
}
