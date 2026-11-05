// Ersetzt das Vorschaubild beim Klick durch das YouTube-Video.
export function initVideos () {
    document.querySelectorAll('[data-video]').forEach((video) => {
        video.querySelector('.video-play').addEventListener('click', () => {
            const iframe = document.createElement('iframe')
            iframe.src = `https://www.youtube-nocookie.com/embed/${video.dataset.video}?autoplay=1&rel=0`
            iframe.title = 'YouTube-Video'
            iframe.allow = 'autoplay; encrypted-media; picture-in-picture; fullscreen'
            iframe.allowFullscreen = true
            video.replaceChildren(iframe)
        })
    })
}
