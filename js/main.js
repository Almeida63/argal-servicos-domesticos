function closeMenu() {
    var menu = document.querySelector('.ul');
    menu.classList.remove('open');
 }
 
 var menuIcon = document.querySelector('.fa-bars');
 var menu = document.querySelector('.ul');
 
 menuIcon.addEventListener('click', function() {
    menu.classList.toggle('open');
 });


 