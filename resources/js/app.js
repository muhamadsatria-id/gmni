// Frontend-only interactions. No backend, no database, no external API.

document.addEventListener('DOMContentLoaded', () => {
    // Search icon in header: focus an on-page search field, otherwise go to the news archive.
    document.querySelectorAll('[data-search-toggle]').forEach((button) => {
        button.addEventListener('click', () => {
            const input = document.querySelector('[data-search-input]');

            if (input) {
                input.scrollIntoView({ block: 'center' });
                input.focus();
                return;
            }

            if (button.dataset.searchFallback) window.location.assign(button.dataset.searchFallback);
        });
    });

    // Filter chips: [data-filter-group] > [data-filter="all|kategori"]
    document.querySelectorAll('[data-filter-group]').forEach((group) => {
        const buttons = group.querySelectorAll('[data-filter]');
        const scope = group.closest('[data-filter-scope]') ?? document;
        const items = scope.querySelectorAll('[data-filter-item]');

        buttons.forEach((button) => {
            button.addEventListener('click', () => {
                const value = button.dataset.filter;

                buttons.forEach((candidate) => {
                    const active = candidate === button;
                    candidate.classList.toggle('is-active', active);
                    candidate.setAttribute('aria-pressed', String(active));
                });

                items.forEach((item) => {
                    const tags = (item.dataset.filter || '').split(' ');
                    item.classList.toggle('hidden', value !== 'all' && !tags.includes(value));
                });
            });
        });
    });

    // Tabs: [data-tabs] > [data-tab="nama"] and [data-tab-panel="nama"]
    document.querySelectorAll('[data-tabs]').forEach((root) => {
        const tabs = root.querySelectorAll('[data-tab]');

        tabs.forEach((tab) => {
            tab.addEventListener('click', () => {
                const name = tab.dataset.tab;

                tabs.forEach((candidate) => {
                    const active = candidate === tab;
                    candidate.classList.toggle('is-active', active);
                    candidate.setAttribute('aria-selected', String(active));
                });

                root.querySelectorAll('[data-tab-panel]').forEach((panel) => {
                    panel.classList.toggle('hidden', panel.dataset.tabPanel !== name);
                });
            });
        });
    });

    // Modal / lightbox: [data-modal-open="id"] -> [data-modal][id="id"]
    const setModal = (modal, open) => {
        if (!modal) return;
        modal.classList.toggle('hidden', !open);
        modal.setAttribute('aria-hidden', String(!open));
        if (open) modal.querySelector('[data-modal-close]')?.focus();
    };

    document.addEventListener('click', (event) => {
        const opener = event.target.closest('[data-modal-open]');
        if (opener) setModal(document.getElementById(opener.dataset.modalOpen), true);

        const closer = event.target.closest('[data-modal-close]');
        if (closer) setModal(closer.closest('[data-modal]'), false);
    });

    document.addEventListener('keydown', (event) => {
        if (event.key !== 'Escape') return;
        document.querySelectorAll('[data-modal]:not(.hidden)').forEach((modal) => setModal(modal, false));
    });

    // Static search: [data-search-input] filters [data-search-item] by text content
    document.querySelectorAll('[data-search-input]').forEach((input) => {
        input.addEventListener('input', () => {
            const query = input.value.trim().toLowerCase();

            document.querySelectorAll('[data-search-item]').forEach((item) => {
                item.classList.toggle('hidden', !item.textContent.toLowerCase().includes(query));
            });
        });
    });
});
