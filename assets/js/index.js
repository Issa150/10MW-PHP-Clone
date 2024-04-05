





const btnsHaveSubmenu = document.querySelectorAll('nav > ul > li:has(ul.subMenu), li:has(div)')
const subMenus = document.querySelectorAll('ul.subMenu')
// console.log(btnsHaveSubmenu);

// Add click event on li 
btnsHaveSubmenu.forEach((btn, firstMenuIndex) => {
    btn.addEventListener("click", () => {  // click event on each li as btn

        subMenus.forEach((submenu, submenuIndex) => {
            if (submenuIndex == firstMenuIndex) {
                submenu.classList.toggle('active');
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
asiderBtn.onclick = () => {
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

tabHeads.forEach((tab, tabIndex) => {
    tab.onclick = () => {
        tabHeads.forEach((tabHead, headIndex) => {
            if (headIndex == tabIndex) {
                tabHead.classList.add('active')
                console.log(tabHead + "<br>" + tabIndex);
            } else {
                tabHead.classList.remove('active')
            }
        })
        wrap_contents.forEach((content, cntIndex) => {
            if (cntIndex == tabIndex) {
                content.classList.add('show_content')
                console.log(content + "<br>" + cntIndex);
            } else {
                content.classList.remove('show_content')
            }
        })
    }
})

//////////////////////////////////////////////////////////////////:


function preventSubmition(e) {
    e.preventDefault()
}



tinymce.init({
    selector: '#mytextarea',
    height: 500
    /*  
        menubar: true,
        menubar: 'favs file edit view insert format',
        plugins: 'image link media table code lists fullscreen',
        toolbar: 'undo redo | formatselect | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | code',
        
        image_title: true,
        automatic_uploads: true,
        images_upload_url: 'postAcceptor.php',
        images_upload_base_path: '/imageDir',
        file_picker_callback: function (cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');

            input.onchange = function () {
                var file = this.files[0];

                var reader = new FileReader();
                reader.onload = function () {
                    var id = 'blobid' + (new Date()).getTime();
                    var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                    var blobInfo = blobCache.create(id, file, reader.result);
                    blobCache.add(blobInfo);

                    cb(blobInfo.blobUri(), { title: file.name });
                };
                reader.readAsDataURL(file);
            };

            input.click();
        }
    */  
});
// tinymce.get('mytextarea').setContent('<?php echo htmlspecialchars($content); ?>');


const accord_heads = document.querySelectorAll('.accord_head')
accord_heads.forEach(head =>{
    head.onclick = ()=>{
        const panel = head.nextElementSibling.classList.toggle('open_accord')
    }
})