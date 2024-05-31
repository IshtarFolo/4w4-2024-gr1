// Store the original text of the captions
window.addEventListener('DOMContentLoaded', function() {
    let legende = document.querySelectorAll('.wp-element-caption');
    legende.forEach(function(legende) {
        if (!legende.dataset.originalText) {
            legende.dataset.originalText = legende.innerText;
        }
    });
});

function limiteLegende() {
    let legende = document.querySelectorAll('.wp-element-caption');
    legende.forEach(function(legende) {
        let mots = legende.dataset.originalText.split(' ');
        if (mots.length > 5) { 
            legende.innerText = mots.slice(0, 3).join(' ') + '...'; 
        }
    });
}

function AugmenteLegende() {
    let legende = document.querySelectorAll('.wp-element-caption');
    legende.forEach(function(legende) {
        let mots = legende.dataset.originalText.split(' ');
        if (mots.length > 5) {
            legende.innerText = mots.slice(0, 15).join(' ') + '...';
        }
    });
}

window.addEventListener('resize', function() {
    if (window.innerWidth <= 700) { 
        limiteLegende();
    }
    else{
        AugmenteLegende();
    }
});

if (window.innerWidth <= 700) { 
    limiteLegende();
} else {
    AugmenteLegende();
}