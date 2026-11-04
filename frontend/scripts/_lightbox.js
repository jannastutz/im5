// Zeigt ein Galeriebild gross an. Mit Pfeilen oder Tastatur kann man durchklicken.
export function initLightbox () {
    const dialog = document.querySelector('[data-lightbox]')
    if (!dialog) return

    const image = dialog.querySelector('[data-lightbox-image]')
    const items = [...document.querySelectorAll('[data-gallery] [data-full]')]
    let current = 0

    function showImage (index) {
        // Am Ende geht es wieder zum ersten Bild und umgekehrt.
        current = (index + items.length) % items.length
        const thumbnail = items[current].querySelector('img')
        image.src = items[current].dataset.full
        image.alt = thumbnail.alt
    }

    items.forEach((item, index) => {
        item.addEventListener('click', () => {
            showImage(index)
            dialog.showModal()
        })
    })

    dialog.querySelector('[data-lightbox-close]').addEventListener('click', () => dialog.close())
    dialog.querySelector('[data-lightbox-prev]').addEventListener('click', () => showImage(current - 1))
    dialog.querySelector('[data-lightbox-next]').addEventListener('click', () => showImage(current + 1))

    // Ein Klick neben das Bild schliesst die Ansicht.
    dialog.addEventListener('click', (event) => {
        if (event.target === dialog) dialog.close()
    })

    dialog.addEventListener('keydown', (event) => {
        if (event.key === 'ArrowLeft') showImage(current - 1)
        if (event.key === 'ArrowRight') showImage(current + 1)
    })
}
