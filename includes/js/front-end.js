console.log("front end");
//  Javascript to be executed on the front end. Impacts visitor experience.
function closeAlert() {
    document.querySelector('.alert-banner').style.display = "none";
}

function expandAll() {
    const accordionItems = document.querySelectorAll('.c-accordion__item');
    const accordionContentBlocks = document.querySelectorAll('.c-accordion__content');
    for (let i = 0; i < accordionItems.length; i++) {
        accordionItems[i].classList.add("is-open");
    }
    for (let j = 0; j < accordionContentBlocks.length; j++) {
        accordionContentBlocks[j].style.display = "block";
    }
}

function collapseAll() {
    const accordionItems = document.querySelectorAll('.c-accordion__item');
    const accordionContentBlocks = document.querySelectorAll('.c-accordion__content');
    for (let i = 0; i < accordionItems.length; i++) {
        accordionItems[i].classList.remove("is-open");
    }
    for (let j = 0; j < accordionContentBlocks.length; j++) {
        accordionContentBlocks[j].style.display = "none";
    }
}
window.addEventListener('load', function() {
    // do something here ...
}, false);