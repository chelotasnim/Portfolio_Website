const loadPage = document.querySelector('.first-load');
function pageReady() {
    loadPage.style.opacity = '0';
    function remove() {
        loadPage.remove();
    } 
    setTimeout(remove, 500);
}
setTimeout(pageReady, 1000);

const needle = document.querySelectorAll('.project-needle');
const projectOpt = document.querySelectorAll('.project-option');
projectOpt.forEach(box => {
    box.addEventListener(
        'mouseenter', function() {
            let posX = box.offsetLeft + box.offsetWidth / 2;
            needle[0].style.transform = 'rotate(-180deg)';
            needle[0].style.left = posX + 16 + 'px';
            needle[1].style.transform = 'none';
            needle[1].style.left = posX + 16 + 'px';
        }
    );
    box.addEventListener(
        'mouseleave', function() {
            needle[0].style.transform = 'rotate(-90deg)';
            needle[0].style.left = '100%';
            needle[1].style.transform = 'rotate(90deg)';
            needle[1].style.left = '-8px';
        }
    );
});

const contactCol = document.querySelectorAll('.contact-col');
const switchLog = document.querySelectorAll('.switch');
switchLog.forEach(btn => {
    btn.addEventListener(
        'click', function() {
            contactCol.forEach(column => {
                if(btn.id == 'log') {
                    column.classList.add('go-log-in');
                } else if(btn.id == 'reg') {
                    column.classList.remove('go-log-in');
                }
            });
        }
    )
});

function progBar(field, methodUsed) {
    if(field.value.length > 4) {
        field.classList.add('filled');
    } else {
        field.classList.remove('filled');
    };
    const totalField = document.querySelectorAll(`.${methodUsed}.data-input`);
    const progData = document.querySelector(`.${methodUsed}.progress-line`);
    const filled = document.querySelectorAll(`.${methodUsed}.filled`);
    let completed = (100 / totalField.length) * filled.length;
    progData.style.width = completed + '%'; 
}
const dataInput = document.querySelectorAll('.data-input');
dataInput.forEach(inputBox => {
    inputBox.addEventListener(
        'keyup', function() {
            const usageMethod = inputBox.className[0];
            progBar(inputBox, usageMethod);
        }
    );
});

const toggleNav = document.querySelector('.close-btn');
const navBar = document.querySelector('.main-navigation');
toggleNav.addEventListener(
    'click', function() {
        navBar.classList.toggle('show');
    }
)
const anchorLink = document.querySelectorAll('.anchor-box a');
anchorLink.forEach(link => {
    link.addEventListener(
        'click', function() {
            navBar.classList.remove('show');
        }
    )
});

const fadePage = document.querySelector('.fade');
function goPage(page) {
    function waitBro() {
        let textNum = Math.floor(Math.random() * 7);
        window.location = 'animation/transition.php?text=text' + textNum + '&&direct=' + page;
    }
    setTimeout(waitBro, 1000);
    function falseFade() {
        fadePage.classList.remove('true');
    }
    setTimeout(falseFade, 2000);
}
const boxLink = document.querySelectorAll('.box-link');
boxLink.forEach(link => {
    link.addEventListener(
        'click', function() {
            const url = link.id;
            fadePage.classList.add('true');
            goPage(url);
        }
    )
});

const codeField = document.getElementById('c-code');
let lockTo = []
for(let i = 0; i < 4; i++) {
    let cCode = Math.floor(Math.random() * 10);
    lockTo.push(cCode);
}
lockTo.forEach(code => {
    console.log(code);
    codeField.value += code;
});