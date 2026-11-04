// Filtert die Projekte auf der Startseite nach Kategorie.
export function initFilter () {
    const filter = document.querySelector('[data-filter]')
    if (!filter) return

    const buttons = filter.querySelectorAll('[data-filter-button]')
    const teasers = document.querySelectorAll('[data-teaser]')
    const empty = document.querySelector('[data-filter-empty]')

    function showCategory (category) {
        let visibleCount = 0

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
    }

    buttons.forEach((button) => {
        button.addEventListener('click', () => showCategory(button.dataset.filterButton))
    })

    // Ein Link auf #projects zeigt wieder die gesamte Übersicht.
    document.querySelectorAll('a[href$="#projects"]').forEach((link) => {
        link.addEventListener('click', () => showCategory('all'))
    })
}
