window.onload = function() {
    const page = document.querySelector('.page');
    page.classList.remove('hide');
}

const backBtn = document.querySelector('.back-btn');
if(backBtn != undefined) {
    backBtn.addEventListener(
        'click', function() {
            let numText = Math.floor(Math.random() * 6);
            window.location = '../animation/transition.php?text=text' + numText + '&&back=true';
        }
    )
}

const webChartCanvas = document.getElementById('web-chart');
if(webChartCanvas != undefined) {
    const webChart = new Chart(webChartCanvas, {
        type: 'radar',
        data: {
            labels: [
                'Vanilla CSS',
                'Vanilla JS',
                'PHP Native',
                'Bootstrap',
                'Laravel'
            ],
            datasets: [{
                label: 'Skor sering dipakai',
                data: [100, 90, 80, 60, 60],
                fill: true,
                backgroundColor: 'rgba(0, 255, 255, .15)',
                pointBackgroundColor: 'rgba(0, 255, 255, .6)',
                borderWidth: 0
            }]
        },
        options: {
            elements: {
                line: {
                    borderWidth: 3
                }
            },
            scales: {
                r: {
                    max: 100,
                    min: 0,
                    ticks : {
                        stepSize: 20,
                        color: 'rgb(255, 255, 255)',
                        backdropColor: 'rgb(50, 50, 70)'                        
                    },
                    angleLines: {
                        color: 'rgb(255, 255, 255)'
                    },
                    grid : {
                        color: 'rgb(150, 150, 150)'
                    },
                    pointLabels:{
                        color: 'rgb(255, 255, 255)'
                    },
                },
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });
}

const skillIcon = document.querySelectorAll('.skill-logo');
if(skillIcon.length > 0) {
    function firstGlow() {
        skillIcon[2].classList.remove('glow');
        skillIcon[0].classList.add('glow');
        function secGlow() {
            skillIcon[0].classList.remove('glow');
            skillIcon[1].classList.add('glow');
            function thirGlow() {
                skillIcon[1].classList.remove('glow');
                skillIcon[2].classList.add('glow');
            }
            setTimeout(thirGlow, 1000);
        }
        setTimeout(secGlow, 1000);
    }
    setInterval(firstGlow, 3000);
}

const showSkill = document.querySelectorAll('.show-skill-btn');
const closeBtn = document.querySelectorAll('.close-btn');
const subPage = document.querySelectorAll('.sub-page');
if(subPage.length > 0) {
    showSkill.forEach(btn => {
        btn.addEventListener(
            'click', function() {
                const typeSkill = btn.id;
                subPage.forEach(sPage => {
                    if(sPage.classList.contains(typeSkill)) {
                        sPage.classList.add('show');
                    }
                });
            }
        );
    });

    closeBtn.forEach(btn => {
        btn.addEventListener(
            'click', function() {
                btn.parentElement.classList.remove('show');
            }
        );
    });
}