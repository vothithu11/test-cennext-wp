document.addEventListener('DOMContentLoaded', () => {
    init_project_carousel()
    init_service_tabs()
});


/**
 * https://splidejs.com/guides/options
 */
function init_project_carousel() {
    const opt_splide = {
        mediaQuery: 'min',
        type: 'loop',
        focus: 'center',
        trimSpace: false,
        breakpoints: {
            768: { focus: 0 }
        },
        autoWidth: true,
    }
    return new Splide('.splide', opt_splide).mount()
}

function init_service_tabs() {
    document.querySelectorAll('.services .tabs button[data-panel]')
        .forEach(tab => tab.addEventListener('click', tab_click_handler))
    function tab_click_handler(ev) {
        const target_id = ev.target.dataset.panel
        document.querySelectorAll(`.services .tab-panel[data-status="wake"]`)
            .forEach(panel => panel.dataset.status = 'sleep')
        document.querySelector(`#${target_id}`).dataset.status = 'wake'
    }
}