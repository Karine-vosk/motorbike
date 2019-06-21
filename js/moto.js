//deined variables

let menu = document.getElementById('menu');
let logo = document.getElementById('logo');
let border = document.querySelector('#inner_header hr');
let header = document.querySelector('#inner_header');
let menuList = document.querySelector('#menu > ul');
let toggleBtn = document.getElementById('toggle_btn');
let dropMenu = document.querySelector("a[href='#about']");
let dropMenuList =document.querySelector('#menu_drop');
let menuLi = Array.from(document.querySelectorAll('.menu_li'));
let menuDropLi = Array.from(document.querySelectorAll('.drop'));
//variable for responsive screen
let screenWidth = window.innerWidth;
//page position to top of page on browser - refresh scroll=0
    window.onbeforeunload = () => {
        window.scrollTo(0, 0);
    }

    // function for responsive scrren
    if(window.matchMedia("(max-width: 768px)").matches) {
    /* the viewport is less than 768 pixels wide */

        //add events for menu
    for (let item of menuLi) {
        item.addEventListener('click', runMenuItems);
        item.addEventListener('mouseleave', runMenuItems);
    }
        //add events for drop menu
    for (let item of menuDropLi) {
        item.addEventListener('click', runMenuDropItems);
        item.addEventListener('mouseleave', runMenuDropItems);

    }

//________________________________
    //run functions
    //function for menu item -- click and mouseleave
    function runMenuItems(e) {
        //defined variable  drop menu item li
        let dropLi= e.target.parentElement.classList.contains('drop');

        // loop for menu li, if menu li has color_li --- class remove
        for(let item of menuLi){
            if(item.classList.contains('color_li')){
                item.classList.remove('color_li')
            }
        }

        //change color each menu li
        if (e.type === 'click') {

            if (e.currentTarget.parentElement.dataset.main === 'menu') {
                //if type == click add class THIS current target
                e.currentTarget.classList.add('color_li');
                //when menu li has href 'about' TOGGLE drop menu
                if(e.currentTarget.children[0] === dropMenu ){
                    dropMenuList.classList.toggle('show_drop_menu');
                    //when contains "drop" class item li doesn't toggle drop menu
                    if(dropLi){
                        dropMenuList.classList.add('show_drop_menu');
                    }
                }
                //when click other menu li -- remove drop menu
                else{
                    dropMenuList.classList.remove('show_drop_menu');
                }
            }

        }//end click condition

        //mouseleave
        else if (e.type === "mouseleave" ) {
            //if type == mouseleave remove class
            e.currentTarget.classList.remove('color_li')
        }

    } //end function runMenu items

    //function drop menu items
    function runMenuDropItems(e){
        //when click add class
        if(e.type ==='click'){
            e.currentTarget.classList.add('color_drop_li')
        }
        //when mouseleave remove class
        else{
            e.currentTarget.classList.remove('color_drop_li')
        }
    }

    //function menu toggle button
    toggleBtn.addEventListener('click', (e)=>{
        menuList.classList.toggle('show_menu');
        //when shoe menu opens add class first li
        if( menuList.classList.contains('show_menu')){
            menuLi[0].classList.add('color_li');
        }
        //when closed menu hide drop menu
        dropMenuList.classList.remove('show_drop_menu');
    });

}

    //scroll function
    window.addEventListener('scroll',()=>{

    if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0){
        menu.classList.add('menu_scroll');
        logo.classList.add('logo_vis');
        border.classList.add('border_scroll');
        header.classList.add('header_scroll');
      /*  if(screenWidth <= 767){
            logo.classList.remove('logo_vis');
        }*/

    }
    else{
        menu.classList.remove('menu_scroll');
        logo.classList.remove('logo_vis');
        border.classList.remove('border_scroll');
        header.classList.remove('header_scroll');
    }
})
