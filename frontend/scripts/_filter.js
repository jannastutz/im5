// Filtert die Projekte auf der Startseite nach Kategorie.
export function initFilter () {
    const filter = document.querySelector('[data-filter]')
    if (!filter) return

    const buttons = filter.querySelectorAll('[data-filter-button]')
    const teasers = document.querySelectorAll('[data-teaser]')
    const empty = document.querySelector('[data-filter-empty]')

    const grid = document.querySelector('[data-grid]')

    // Die Seite passt sich der Anzahl Projekte an. Sie bleibt nur so hoch,
    // dass der Filter beim Klick an seinem Platz bleibt und nichts springt.
    function keepScrollPosition (scrollY) {
        const getMissing = () => scrollY + window.innerHeight - document.documentElement.scrollHeight

        // Mehrmals, weil auf kurzen Seiten zuerst freier Platz aufgebraucht wird.
        while (getMissing() > 0) {
            grid.style.minHeight = `${grid.offsetHeight + getMissing()}px`
        }
        window.scrollTo({ top: scrollY, behavior: 'instant' })
    }

    function showCategory (category) {
        const scrollY = window.scrollY
        let visibleCount = 0

        grid.style.minHeight = ''

        teasers.forEach((teaser) => {
            const categories = teaser.dataset.categories.split(' ')
            const isVisible = category === 'all' || categories.includes(category)
            teaser.hidden = !isVisible
            if (isVisible) visibleCount++
        })

        buttons.forEach((button) => {
            button.setAttribute('aria-pressed', button.dataset.filterButton === category)
        })

        empty.hidden = visibleCount > 0
        keepScrollPosition(scrollY)
    }

    buttons.forEach((button) => {
        button.addEventListener('click', () => showCategory(button.dataset.filterButton))
    })

    // Ein Link auf #projects zeigt wieder die gesamte Übersicht.
    document.querySelectorAll('a[href$="#projects"]').forEach((link) => {
        link.addEventListener('click', () => showCategory('all'))
    })
}