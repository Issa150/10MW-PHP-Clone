const btnsHaveSubmenu = document.querySelectorAll('nav > ul > li:has(ul.subMenu), li:has(div)')
const subMenus = document.querySelectorAll('ul.subMenu')
// console.log(btnsHaveSubmenu);

// Add click event on li 
btnsHaveSubmenu.forEach((btn, firstMenuIndex) => {
    btn.addEventListener("click", () => {  // click event on each li as btn

        subMenus.forEach((submenu, submenuIndex) => {
            if (submenuIndex == firstMenuIndex) {
                submenu.classList.add('active');
            }
        })


        // Remove other acive classes
        subMenus.forEach((submenu, submenuIndex) => {
            if (submenuIndex != firstMenuIndex) {
                submenu.classList.remove('active');
            }
        })
    })
})

// Close the Sub Menu when you click outside of it
document.addEventListener("click", (event) => {
    // Check if the click is outside the accordion
    if (!event.target.closest('nav > ul > li')) {
        // Close all accordion items
        subMenus.forEach((submenu) => {
            submenu.classList.remove('active');
        });
    }
});

const asiderBtn = document.querySelector('.asiderBtn')
const asider = document.querySelector('.left_menu')
asiderBtn.onclick = ()=>{
    asider.classList.toggle('active')
}

/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////

// Asider scripts
// const asiderTabs = document.querySelectorAll('.wrap_tabs .tab_head')
// const wrap_contents = document.querySelectorAll('.wrap_content')
// const tabHeads = document.querySelectorAll('.tab_head')

// asiderTabs.forEach((tab,tabIndex)=>{
//     tab.onclick = ()=>{
//         tabHeads.forEach((tabHead,headIndex)=>{
//             if(headIndex == tabIndex){
//                 tabHead.classList.add('active')
//             }else{
//                 tabHead.classList.remove('active')
//             }
//         })
//         wrap_contents.forEach((content,cntIndex)=>{
//             if(cntIndex == tabIndex){
//                 content.classList.add('show_content')
//             }else{
//                 content.classList.remove('show_content')
//             }
//         })
//     }
// })
/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////

// Dashboard Page scripts

/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////

// Dashboard Page scripts
//verification de Mot de pass! PHP

// Glossaire Page Scripts

// const asiderTabs = document.querySelectorAll('.wrap_tabs .tab_head')
const wrap_contents = document.querySelectorAll('.wrap_content')
const tabHeads = document.querySelectorAll('.tab_head')

tabHeads.forEach((tab,tabIndex)=>{
    tab.onclick = ()=>{
        tabHeads.forEach((tabHead,headIndex)=>{
            if(headIndex == tabIndex){
                tabHead.classList.add('active')
                console.log(tabHead + "<br>" + tabIndex);
            }else{
                tabHead.classList.remove('active')
            }
        })
        wrap_contents.forEach((content,cntIndex)=>{
            if(cntIndex == tabIndex){
                content.classList.add('show_content')
                console.log(content + "<br>" + cntIndex);
            }else{
                content.classList.remove('show_content')
            }
        })
    }
})

//////////////////////////////////////////////////////////////////:


function preventSubmition(e){
    e.preventDefault()
}