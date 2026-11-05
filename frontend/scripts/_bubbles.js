// Die Bubbles sind in Prozent der Seitenhöhe platziert. Damit sie stehen bleiben,
// wenn die Seite durch aufgeklappte Inhalte länger wird, wird ihre Ebene fixiert.
export function initBubbles () {
    const bubbles = document.querySelector('.bubbles')
    if (!bubbles) return

    function fixHeight () {
        bubbles.style.bottom = ''
        bubbles.style.height = ''
        const height = bubbles.offsetHeight
        bubbles.style.bottom = 'auto'
        bubbles.style.height = `${height}px`
    }

    fixHeight()
    document.fonts.ready.then(fixHeight)
    window.addEventListener('load', fixHeight)
    window.addEventListener('resize', fixHeight)
}
