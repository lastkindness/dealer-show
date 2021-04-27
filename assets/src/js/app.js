'use strict';

/**
 *  Load modules
 */

import main from './modules/main';
import form from './modules/form';
import sliders from './modules/sliders';
import faq from './modules/faq';
import modals from './modules/modals';
$(document).ready(() => {
    main();
    form();
    sliders();
    faq();
    modals();
});

import '../scss/app.scss';
