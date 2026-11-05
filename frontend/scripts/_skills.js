// Hält die angeklickte Zeile an ihrem Platz, auch wenn sich darüber ein anderer Skill schliesst.
// So verschiebt sich nur, was unterhalb liegt.
export function initSkills () {
    document.querySelectorAll('.skill summary').forEach((summary) => {
        summary.addEventListener('click', () => {
            const topBefore = summary.getBoundingClientRect().top

            requestAnimationFrame(() => {
                const difference = summary.getBoundingClientRect().top - topBefore
                if (difference !== 0) {
                    window.scrollBy({ top: difference, behavior: 'instant' })
                }
            })
        })
    })
}
