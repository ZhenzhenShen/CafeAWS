var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");

    if (n > slides.length) {
        slideIndex = 1;
    }

    if (n < 1) {
        slideIndex = slides.length;
    }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[slideIndex - 1].style.display = "block";
}

// 添加自动播放功能
setInterval(function() {
    plusSlides(1);
}, 2000); // 设置切换间隔，这里是2秒

document.addEventListener("DOMContentLoaded", function() {
    // 初始时设置 #mainsbutton 为选中状态
 document.getElementById('mainsbutton').classList.add('selected');

    var buttons = document.querySelectorAll('.button');
    var menuContents = document.querySelectorAll('.menucontainer');
    // 为每个按钮添加点击事件监听器
    buttons.forEach(function(button, index) {
        button.addEventListener('click', function() {
            // 移除所有按钮的选中状态
         var allButtons = document.querySelectorAll('.button');
         allButtons.forEach(function(button) {
             button.classList.remove('selected');
         });
         // 设置点击按钮为选中状态
         event.target.classList.add('selected');
            // 移除所有菜单内容的active类
            menuContents.forEach(function(menuContent) {
                menuContent.classList.remove('active');
            });
            // 将点击按钮对应的菜单内容添加active类
            menuContents[index].classList.add('active');
        });
    });
});

    // document.addEventListener("DOMContentLoaded", function() {
    //     // 初始时设置 #menuBtn 为选中状态
    //     document.getElementById('menuBtn').classList.add('active');
    
    //     var buttonsNav = document.querySelectorAll('.buttonNav');
    
    //     buttonsNav.forEach(function(button) {
    //         button.addEventListener('click', function(event) { // 添加 event 参数
    //             // 移除所有按钮的选中状态
    //             buttonsNav.forEach(function(btn) {
    //                 btn.classList.remove('active');
    //             });
    
    //             // 设置点击的按钮为选中状态
    //             event.target.classList.add('active');
    //         });
    //     });
    // });

    document.addEventListener("DOMContentLoaded", function() {
        console.log("DOM fully loaded and parsed");
    
        var menuBtn = document.getElementById('menuBtn');
        if (menuBtn) {
            menuBtn.classList.add('active');
            console.log("menuBtn found and set to active");
        } else {
            console.log("menuBtn not found");
        }
    
        var buttonsNav = document.querySelectorAll('.buttonNav');
        console.log("Found", buttonsNav.length, "navigation buttons");
    
        buttonsNav.forEach(function(button) {
            button.addEventListener('click', function(event) {
                buttonsNav.forEach(function(btn) {
                    btn.classList.remove('active');
                });
                event.target.classList.add('active');
                console.log("Button clicked and set to active");
            });
        });
    });
    
    



 


         
