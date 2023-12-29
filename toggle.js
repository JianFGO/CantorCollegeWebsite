// JavaScript for toggle functionality
document.getElementById('toggleButton').addEventListener('click', function() {
    const courseTable = document.getElementById('courseTable');
    if (courseTable.style.display === 'none') {
        courseTable.style.display = 'block';
    } else {
        courseTable.style.display = 'none';
    }
});