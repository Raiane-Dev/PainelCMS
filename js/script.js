    for(var i = 0; i < document.links.length; i++){
        if(document.links[i].href == document.URL){
            document.links[i].parentElement.className = 'active';
        }
    }
    var toggleMenu = document.querySelectorAll('.menuAside');
    var asideMobile = document.querySelector('.aside-menu');

    for(var i = 0; i < toggleMenu.length; i++){
    toggleMenu[i].addEventListener('click', menuAction);
    }

    function menuAction(){
        if(asideMobile.classList.contains('hide')){
            asideMobile.classList.remove('hide');
        }else{
            asideMobile.classList.add('hide');
        }
    }