// Blendet den weichen Verlauf hinter der Navigation ein, sobald die Seite gescrollt wird.
export function initHeader () {
    const header = document.querySelector('[data-layout="header"]')
    if (!header) return

    function update () {
        header.toggleAttribute('data-scrolled', window.scrollY > 10)
    }

    window.addEventListener('scroll', update, { passive: true })
    update()
}
