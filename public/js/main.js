window.addEventListener('DOMContentLoaded', () => {
    /**
     * Main JS from template
     */
    'use strict';

    const app = {
        'global': document.getElementById('wrapper_global'),
    }

    const navigation = document.getElementById('navigation');

    if (navigation) {
        let overlay = document.getElementById('overlay-navigation');

        document.querySelector('#checkbox-navigation').addEventListener('change', function () {
            navigation.classList.toggle('is-navigation-show');
            overlay.classList.toggle('is-visible');

            this.checked
                ? document.body.classList.add('!overflow-hidden')
                : document.body.classList.remove('!overflow-hidden');
        });
    }

    const dropdownCollection = document.querySelectorAll('[data-trigger=dropdown]');
    const collapseCollection = document.querySelectorAll('[data-trigger=collapse]');

    /**
     * Show/hidden dropdown
     * @param event
     */
    function dropdown_toggle(event)
    {
        event.stopPropagation()

        const element = this.nextElementSibling;
        const active  = element.classList.contains('is-dropdown-show');

        /**
         * Hide sensible
         */
        dropdown_sensible_close()

        switch (active) {
            case false:
                element.classList.add('is-dropdown-show');
                this.setAttribute('aria-expanded', 'true');
                window.addEventListener('click', dropdown_outside);
                app.global.addEventListener('scroll', dropdown_scroll);

                break;

            case true:
                element.classList.remove('is-dropdown-show');
                this.setAttribute('aria-expanded', 'false');

                break;
        }
    }

    /**
     * Hide all sensible dropdowns
     */
    function dropdown_sensible_close()
    {
        let dropdowns_sensible = document.querySelectorAll('[data-dropdown-sensible]');

        dropdowns_sensible.forEach(dropdown => {
            let element = dropdown.nextElementSibling;

            element.classList.remove('is-dropdown-show');
            dropdown.setAttribute('aria-expanded', 'false');
        });
    }

    /**
     * Hide dropdown with click outside
     * @param event
     */
    function dropdown_outside(event)
    {
        const target = event.target;
        const hasDropdown = target.closest('.is-dropdown-show') !== null;

        if (!hasDropdown) {
            dropdown_sensible_close()
            window.removeEventListener('click', dropdown_outside);
            app.global.removeEventListener('scroll', dropdown_scroll);
        }
    }

    /**
     * Hide dropdown with scroll
     * @param event
     */
    function dropdown_scroll(event)
    {
        dropdown_sensible_close();
        window.removeEventListener('click', dropdown_outside);
        app.global.removeEventListener('scroll', dropdown_scroll);
    }

    /**
     * Simple toggle collapse
     */
    function collapse_toggle()
    {
        const element = this.nextElementSibling;
        const collapsed  = element.classList.contains('is-collapsed');

        if (!element.classList.contains('is-collapse-transition')) {
            collapsed ? collapse_open(element) : collapse_close(element);
        }
    }

    function collapse_open(element)
    {
        element.classList.remove('is-collapsed');
        element.classList.add('is-collapse-transition');

        element.style.setProperty('--collapse-height', "0px");
        element.style.setProperty('--collapse-height', element.scrollHeight + "px");

        setTimeout(() => {
            element.classList.remove('is-collapse-transition');
        }, 350);
    }

    function collapse_close(element)
    {
        element.classList.add('is-collapse-transition');
        element.style.setProperty('--collapse-height', element.scrollHeight + "px");

        setTimeout(() => element.style.setProperty('--collapse-height', "0px"), 5);

        setTimeout(() => {
            element.classList.add('is-collapsed');
            element.classList.remove('is-collapse-transition');
            element.style.removeProperty('--collapse-height', "0px");
        }, 350);
    }

    document.querySelectorAll('.waves-effect').forEach( element => {


        element.addEventListener('click', function (event) {
            const rect = this.getBoundingClientRect();
            const position_X = event.clientX - rect.left - 12;
            const position_Y = event.clientY - rect.top - 12;

            const ripple = document.createElement("span");
            ripple.style.left = position_X + "px";
            ripple.style.top = position_Y + "px";
            ripple.classList.add('ripple');

            this.appendChild(ripple);

            setTimeout(() => {
                ripple.remove();
            }, 750);
        })
    })

    dropdownCollection.forEach(dropdown => {
        dropdown.addEventListener('click', dropdown_toggle);
    });

    collapseCollection.forEach(collapse => {
        collapse.addEventListener('click', collapse_toggle);
    });
});
