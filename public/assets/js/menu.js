function showMenu(params) {
    params.parentElement.parentElement.querySelector('.mobile').style.right = '0%';
}
function closeMenu(params) {
    params.parentElement.style.right = '-140%';
}
setTimeout(() => {
    document.querySelector('.loading').style.display = 'none';
}, 2500);

document.querySelector('.zap-a').addEventListener('click', function () {
    document.querySelector('.zap-a-content').style.display = 'flex';
})

let zapClose = document.querySelectorAll('.zap-close');

for (let i = 0; i < zapClose.length; i++) {
    const element = zapClose[i];
    element.addEventListener('click', function(event) {
        document.querySelector('.zap-a-content').style.display = 'none';
    })
}
