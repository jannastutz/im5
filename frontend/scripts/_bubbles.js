// Die Bubbles sind in Prozent der Seitenhöhe platziert. Damit sie stehen bleiben,
// wenn sich die Seitenhöhe ändert (Skills, Filter), bekommt ihre Ebene eine feste Höhe.
// Die äussere Ebene schneidet sie auf die aktuelle Seitenlänge zu.
export function initBubbles () {
    const layer = document.querySelector('.bubbles-layer')
    if (!layer) return

    function fixHeight () {
        layer.style.height = ''
        layer.style.height = `${layer.offsetHeight}px`
    }

    fixHeight()
    document.fonts.ready.then(fixHeight)
    window.addEventListener('load', fixHeight)
    window.addEventListener('resize', fixHeight)
}